<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'status',
        'added_by',
        'suspended_by'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_role');
    }

    public function isSuperAdmin()
    {
        $user = User::join('user_role', 'users.id', '=', 'user_role.user_id')
            ->join('roles', 'roles.id', '=', 'user_role.role_id')
            ->where('user_role.user_id', Auth::id())
            ->where('user_role.role_id', 1)
            ->exists();

        // $user1 = User::whereHas('roles')
        //     ->where('user_role.role_id', 1)
        //     ->where('id', Auth::id())
        //     ->exists();

        // dd($user1);

        return ($user) ? true : false;

    }

    public static function totalUsers(){
        return User::count();
    }

    public static function totalUsersByRole($roleId)
    {
        return self::join('user_role', 'users.id', '=', 'user_role.user_id')
            ->where('user_role.role_id', $roleId)
            ->count();
    }

    public function addedBy()
    {
        return $this->belongsTo(User::class, 'added_by');
    }

    public function suspendedBy()
    {
        return $this->belongsTo(User::class, 'suspended_by');
    }

}
