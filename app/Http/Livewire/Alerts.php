<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Alerts extends Component
{
  public function render()
  {
    $type = null;

    if(Session::has("success")){
      $type = "success";
    }

    if(Session::has("warning")){
      $type = "warning";
    }

    if(Session::has("info")){
      $type = "info";
    }

    if(Session::has("error")){
      $type = "error";
    }



    $message = session($type);
    return view('livewire.alerts',[
      "message" => $message,
      "type" => $type
    ]);
  }
}
