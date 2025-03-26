<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Role;
use App\Models\UserRole;

class manageUserController extends Controller
{
    public function get(Request $request){
        $userCount = User::totalUsers();
        $adminCount = User::totalUsersByRole(2); // 2 is the role id of admin
        $authorCount = User::totalUsersByRole(3); // 3 is the role id of author
        $studentCount = User::totalUsersByRole(4); // 4 is the role id of student
        return view('admin.manageUser', compact(['userCount','adminCount','authorCount','studentCount']));
    }

    public function addedBy(Request $request){

        $load_data = $request->validate([
            "name"     => "required|string|min:3|max:20",
            "email"    => "required|email|unique:users,email|max:80",
            "password" => "required|string|min:8|max:16|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*?&]/",
            "role"     => "required|integer|in:2,3,4",
            "addedBy"  => "required|integer",
        ]);

        // var_dump($load_data);

        try{
            DB::beginTransaction();

            $role = Role::find($load_data['role']);


            $user = User::Create([
                "name"     => $load_data['name'],
                "email"    => $load_data['email'],
                "password" => Hash::make($load_data['password']),
                "role"     => $role['role_name'],
                "added_by" => $load_data['addedBy'],
            ]);


            // dd($user);

            $user->roles()->attach($role->id);

            DB::commit();

            return back()->with('success', 'User registered successfully!');
        }catch (Exception $e){
            DB::rollback();
            return redirect()->back()->withErrors("hello")->withInput();
        }
    }

    public function getUser(Request $request)
{
    $load_data = $request->validate([
        'finalData' => [
            'required',
            'json',
            function ($attribute, $value, $fail) {
                $data = json_decode($value, true);

                if (!$data) {
                    return $fail('Invalid JSON format.');
                }

                if (
                    !(isset($data['id']) && is_numeric($data['id'])) &&
                    !(isset($data['email']) && filter_var($data['email'], FILTER_VALIDATE_EMAIL))
                ) {
                    return $fail('Invalid ID or Email format.');
                }
            }
        ]
    ]);

    $data = json_decode($request->input('finalData'), true);

    $users = collect(); // Use collection to handle multiple results

    if (isset($data['id'])) {
        $users = User::where('id', $data['id'])->get();
    } elseif (isset($data['email'])) {
        $users = User::where('email', $data['email'])->get();
    }

    return back()->with([
        'users' => $users
    ]);
}

public function approveSuspened(Request $request){
    $load_data = $request->validate([
        "id"     => "required|integer",
        "status" => "required|string|in:approved,suspended"
    ]);
    
    try {
        DB::beginTransaction();
    
        $adminRole = Auth::user()->roles;
    
        $user = User::find($load_data['id']);
    
        $userRole = $user->roles;
    
        if ($adminRole->contains('slug', 'super-admin') && !$userRole->contains('slug', 'super-admin')) {

            $user->update([
                'status'        => $load_data['status'],
                'suspended_by'  => $load_data['status'] === "suspended" ? Auth::id() : null,
                // 'remember_token'=> $load_data['status'] === "suspended" ? null : $user->remember_token

            ]);
    
        } elseif (
            $adminRole->contains('slug', 'admin') &&
            !$userRole->pluck('slug')->intersect(['super-admin', 'admin'])->count()
        ) {
            $check = User::with('roles')
            ->where('id', $user->suspended_by)  // Correct column should be 'id', not 'user_id'
            ->first();

            if (!$check || !$check->roles->contains('slug', 'super-admin')) {
                $user->update([
                    'status'        => $load_data['status'],
                    'suspended_by'  => $load_data['status'] === "suspended" ? Auth::id() : null,
                    // 'remember_token'=> $load_data['status'] === "suspended" ? null : $user->remember_token
                ]);
            } else {
                return back()->with('error', "You don't have enough permission!");
            }

        } else {
            return back()->with('error', "You don't have enough permission!");
        }
    
        DB::commit();
    
        return back()->with('success', "Successfully updated");
    
    } catch (Exception $e) {
        DB::rollback();
    
        // Detailed error response for better debugging
        return back()->with('error', "Error occurred: " . $e->getMessage());
    }
    
}

}
