<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VerifyUser extends Model
{
    use HasFactory;

    protected $fillable = array(
      "user_id",
      "token",

    );

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
