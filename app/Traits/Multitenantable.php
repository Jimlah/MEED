<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

trait Multitenantable
{

  public static function bootMultitenantable()
  {
    if (Auth::check()) {
      if (Auth::user()->role != User::USER_SUPER_ADMIN) {
        static::addGlobalScope('org_id', function (Builder $builder) {
          $builder->where('org_id', Auth::user()->org_id)
            ->Where('id', "!=", '1');
        });
      }
    }
  }
}
