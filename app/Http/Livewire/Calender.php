<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Acaronlex\LaravelCalendar\Calendar;

class Calender extends Component
{
  public function render()
  {
    $events = [];

    $events[] = Calendar::event(
      'Event One', //event title
      false, //full day event?
      '2015-02-11T0800', //start time (you can also use Carbon instead of DateTime)
      '2015-02-12T0800', //end time (you can also use Carbon instead of DateTime)
      0 //optionally, you can specify an event ID
    );

    $events[] = Calendar::event(
      "Valentine's Day", //event title
      true, //full day event?
      new \DateTime('2021-05-09'), //start time (you can also use Carbon instead of DateTime)
      new \DateTime('2021-05-14'), //end time (you can also use Carbon instead of DateTime)
      'stringEventId' //optionally, you can specify an event ID
    );

    $calendar = new Calendar();
    $calendar->addEvents($events)
      ->setOptions([
        'locale' => 'en',
        'firstDay' => 0,
        'displayEventTime' => true,
        'headerToolbar' => [
          'end' => 'today prev,next'
        ]
      ]);
    $calendar->setId('1');
    $calendar->setCallbacks([
      'select' => 'function(selectionInfo){}',
      'eventClick' => 'function(event){}'
    ]);

    return view('livewire.calender', [
      'calendar' => $calendar
    ]);
  }
}
