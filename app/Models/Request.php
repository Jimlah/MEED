<?php

namespace App\Models;

use App\Traits\Search;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory, Search;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id',
        'org_id',
        'request_type_id',
        'description',
        'status',
        'priority',
        'period',
    ];

    /**
     * searchable attributes
     *
     * @var array
     */
    protected $searchable = [
      'description',
      'status',
      'priority',
      'period',
  ];
}
