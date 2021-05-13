<?php

namespace App\Models;

use App\Traits\Search;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
  use HasFactory, Notifiable, Search;

  const USER_SUPER_ADMIN = 1;
  const USER_ADMIN = 2;
  const USER_MEMBER = 3;
  const USER_CLIENT = 4;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'org_id',
    'firstname',
    'lastname',
    'email',
    'role',
  ];

  protected  $searchable = [
    'firstname',
    'lastname',
    'email',
    'role',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password',
    'remember_token',
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
