<?php

namespace App\Models;

use App\Traits\Search;
use App\Models\Request;
use App\Models\VerifyUser;
use App\Traits\Multitenantable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use HasFactory, Notifiable;
  use Search, Multitenantable;

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

  public function org()
  {
    return $this->belongsTo(self::class, 'org_id');
  }

  public function role()
  {
    switch ($this->role) {
      case self::USER_SUPER_ADMIN :
          $role = "Super Admin";
        break;
        case self::USER_ADMIN :
          $role = "Admin";
        break;
        case self::USER_CLIENT :
          $role = "Client";
        break;
        case self::USER_MEMBER :
          $role = "Member";
        break;

      default:
          $role = "Unknown";
        break;
    }
    return $role;
  }

  public function verifyUser()
  {
    return $this->hasOne(VerifyUser::class);
  }

  public function requests()
  {
    return $this->hasMany(Request::class, 'client_id');
  }
}
