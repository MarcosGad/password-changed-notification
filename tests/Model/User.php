<?php

namespace MAG\PasswordChangedNotification\Tests\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use MAG\PasswordChangedNotification\Contracts\PasswordChangedNotificationContract;
use MAG\PasswordChangedNotification\Traits\PasswordChangedNotificationTrait;

class User extends Authenticatable implements PasswordChangedNotificationContract
{
    use Notifiable;
    use HasFactory;
    use PasswordChangedNotificationTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
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
