<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Acaronlex\LaravelCalendar\Calendar;
use App\Models\Request;
use Carbon\Carbon;

class Calender extends Component
{
  public function render()
  {
    $events = [];

    $requests = Request::all();
    foreach ($requests as $request) {
      $events[] = Calendar::event(
        $request->request_type->name . " " . $request->client->firstname, //event title
        true, //full day event?
        new Carbon($request->created_at), //start time (you can also use Carbon instead of DateTime)
        Carbon::now(), //end time (you can also use Carbon instead of DateTime)
        $request->id,//optionally, you can specify an event ID
        $options = [
          "url" => route('requests.show', [$request->id])
        ]
      );
    }




    $calendar = new Calendar();
    $calendar->addEvents($events)
      ->setOptions([
        'locale' => 'en',
        'firstDay' => 0,
        'displayEventTime' => true,
        'initialView' => 'dayGridMonth',
        'headerToolbar' => [
          'end' => 'today prev,next'
        ]
      ]);
    $calendar->setId('1');
    $calendar->setCallbacks([
      'select' => 'function(selectionInfo){}',
      'eventClick' => 'function(event){
        window.location = event.event.url
      }'
    ]);

    return view('livewire.calender', [
      'calendar' => $calendar
    ]);
  }
}
