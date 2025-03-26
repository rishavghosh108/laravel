<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Path;
use App\Models\Role;

use Illuminate\Support\Facades\DB;

class managePermissionController extends Controller
{
    public function get(Request $request){
        $jsonData = [];

        $objectOfPathRole = Path::with('roles')->get();

        foreach($objectOfPathRole as $pathObject){
            $path = [
                "path_id" => $pathObject->id,
                "path" => $pathObject->path,
                "roles" => []
            ];

            foreach($pathObject->roles as $role){
                array_push($path['roles'], [
                    "role_id" => $role->id,
                    "role"    => $role->slug
                ]);   
            }
            array_push($jsonData, $path);
        }

        return view('admin.managePermission', compact('jsonData'));
    }

    public function post(Request $request){
        $permissions = json_decode($request->input('permissions_data'), true);
    
        try {
            DB::beginTransaction();
    
            if (isset($permissions['added'])) {
                foreach ($permissions['added'] as $permission) {
                    $path = Path::find($permission['path_id']);
    
                    if (!$path) {
                        continue;
                    }
    
                    foreach ($permission['roles'] as $role) {
                        $exists = $path->roles()->where('role_id', $role)->exists();
    
                        if (!$exists) {
                            $path->roles()->attach($role);
                        }
                    }
                }
            }
    
            if (isset($permissions['deleted'])) {
                foreach ($permissions['deleted'] as $permission) {
                    $path = Path::find($permission['path_id']);
    
                    if (!$path) {
                        continue;
                    }
    
                    foreach ($permission['roles'] as $role) {
                        $exists = $path->roles()->where('role_id', $role)->exists();
    
                        if ($exists) {
                            $path->roles()->detach($role);
                        }
                    }
                }
            }
    
            DB::commit();
            return back()->with(['message' => 'Permissions updated successfully'], 200);
    
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while updating permissions'], 500);
        }    
    }
}
