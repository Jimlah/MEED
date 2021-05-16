<?php

namespace App\Http\Livewire;

use App\Models\Request;
use Livewire\Component;

class ChangeRequestStatus extends Component
{
  public $req;

  public $rid;

  public $status;

  public function changeStatus($status, $rid)
  {
    $req = Request::find($rid);
    $req->status = $status;
    $req->save();

    session()->flash("info", "You have change the status of  the request");

    return redirect()->route('requests.index');
  }

  public function render()
  {
    return view('livewire.change-request-status');
  }
}
