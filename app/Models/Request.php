<?php

namespace App\Models;

use App\Models\User;
use App\Traits\Search;
use App\Models\RequestType;
use App\Traits\ClientFilter;
use App\Traits\Multitenantable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Request extends Model
{
  use HasFactory, Search, Multitenantable, ClientFilter;

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

  public function request_type()
  {
    return $this->belongsTo(RequestType::class, 'request_type_id');
  }

  public function status()
  {
    $statuses = [
      self::STATUS_PENDING => 'Pending',
      self::STATUS_PROCESSING => 'Processing',
      self::STATUS_OPEN => 'Open',
      self::STATUS_CLOSE => 'Close',
    ];

    return $statuses[$this->status] ?? 'Unknown';
  }


  public function priority()
  {
    $statuses = [
      self::PRIORITY_LOW => 'Low',
      self::PRIORITY_MEDIUM => 'Medium',
      self::PRIORITY_HIGH => 'High',
    ];

    return $statuses[$this->priority] ?? 'Unknown';
  }

  public function priority_color()
  {
    $color = [
      self::PRIORITY_LOW => 'green',
      self::PRIORITY_MEDIUM => 'blue',
      self::PRIORITY_HIGH => 'red',
    ];
    return $color[$this->priority] ?? 'gray';
  }

}
