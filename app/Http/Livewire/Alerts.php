<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Alerts extends Component
{
  public function render()
  {
    session()->flash('success', "You have registered");
    $message = session('success');
    return view('livewire.alerts',[
      "message" => $message
    ]);
  }
}
