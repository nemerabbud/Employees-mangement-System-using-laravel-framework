<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','image' , 'mobile','role'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    const  role = [
        'Employee','Manager','Submanager', 'Admin'
    ];
    const  NewUserValidationRule =[
        'name' => 'required|string|max:100',
        'email' => ['required', 'string', 'email', 'max:191', 'unique:users'],
        'mobile' => 'required|string',
        'device_type' => 'required|string',
        'fcm_token' => 'required|string',
        'password' => 'required|string|min:6'
    ];
    const  LoginUserValidationRule =[
        'fcm_token' => 'required|string',
        'email' => ['required', 'string', 'email', 'max:100'],
        'device_type' => 'required|string|in:ios,android',
        'password' => 'required|string|min:6'
    ];
    const UserProfile =[

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
