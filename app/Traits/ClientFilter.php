<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

trait ClientFilter
{

  public static function bootClientFilter()
  {
    if (Auth::check()) {
      if (Auth::user()->role == User::USER_CLIENT) {
        static::addGlobalScope('client_id', function (Builder $builder) {
            $builder->where('client_id', Auth::user()->id);
          });
        }
    }
  }
}
