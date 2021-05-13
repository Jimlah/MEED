<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserLive extends Component
{
  use withPagination;
  public $term = "";

  public function render()
  {
    // sleep(1);
    $users = User::search($this->term)->paginate();
    return view('livewire.user-live', [
      'users' => $users
    ]);
  }
}
