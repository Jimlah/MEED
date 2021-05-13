<?php

namespace App\Models;

use App\Models\User;
use App\Traits\Search;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Request extends Model
{
  use HasFactory, Search;

  const STATUS_PENDING = 1;
  const STATUS_OPEN = 2;
  const STATUS_PROCESSING = 3;
  const STATUS_CLOSE = 4;


  const PRIORITY_LOW =  1;
  const PRIORITY_MEDIUM =  2;
  const PRIORITY_HIGH =  3;

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

  public function client()
  {
    return $this->belongsTo(User::class, 'client_id');
  }

  public function org()
  {
    return $this->belongsTo(User::class, 'client_id');
  }
}
