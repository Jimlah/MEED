<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ChangeUserStatus extends Component
{

  public $user;
  public $userid;

  public function changeStatus($userid)
  {
    $user = User::find($userid);
    $user->status = !$user->status;
    $user->save();

    session()->flash("info", "You have change the status of  the request");

    return redirect()->route('users.index');
  }

  public function render()
  {
    return view('livewire.change-user-status');
  }
}
