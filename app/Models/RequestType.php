<?php

namespace App\Models;

use App\Traits\Search;
use App\Traits\Multitenantable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RequestType extends Model
{
    use HasFactory, Search;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'name'
    ];

    /**
     * The attributes that can be search.
     *
     * @var array
     */
    protected $searchable = [
      'name'
   ];
}
