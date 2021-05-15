<?php

namespace App\Http\Livewire;

use App\Models\Request;
use Livewire\Component;

class FlagRequest extends Component
{

  public $flag;

  public $reqid;

  public function flag($flag, $reqid)
  {
    $req = Request::find($reqid);
    $req->priority = $flag;
    $req->save();

    session()->flash("info", "You have flagged the request");

    return redirect()->route('requests.index');
  }

  public function render()
  {
    return view('livewire.flag-request');
  }
}
