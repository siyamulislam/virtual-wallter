<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public static function getRoles()
    {
        $arr = [
            ["id" => "1", "role_name" => "Admin"],
            ["id" => "2", "role_name" => "Editor"],
            ["id" => "3", "role_name" => "User"]
        ];
//        return json_encode($arr);
//        return $arr;
        return json_decode(json_encode($arr), false);
    }

    public static function createOrUpdateUser($request, $id = null)
    {
        User::updateOrCreate(['id' => $id], [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_type' => $request->role,
        ]);
    }
    public static function updateUser($request, $id = null)
    {
        User::updateOrCreate(['id' => $id], [
            'name' => $request->name,
            'email' => $request->email,
            'role_type' => $request->role,
        ]);
    }


}


