<?php
namespace App\Traits;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

trait Multitenantable{

  public static function bootMultitenantable()
  {
    if (auth()->check()) {
      static::addGlobalScope('org_id', function(Builder $builder)
      {
        if (auth()->id() != User::USER_SUPER_ADMIN) {
          $builder->where('org_id', auth()->id());
        }
      });
    }
  }
}