<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use Calendar;
use Validator;
use App\Event;
use App\User;


class EventController extends Controller

{
    public function show()
    {
      $setlists = DB::table('setlists')
                  ->where('users_id', Auth::id())
                  ->get();

      $events = DB::table('events')
                ->where('users_id', Auth::id())
                ->get();

      return view('events', compact('events', 'setlists'));
    }

    public function showbooking()
    {
      $bookings = DB::table('events')
                ->where('users_id', Auth::id())
                ->where('event_type', 'Performance')
                ->get();

      return view('booking', compact('bookings'));
    }   

    public function addEvent(Request $request)
    {
      $event = new Event;

      $event->users_id = Auth::id();
      $event->event_name = $request->event_name;
      $event->event_date = $request->event_date;
      $event->event_time = $request->event_time;
      $event->event_venue = $request->event_venue;
      $event->event_type = $request->event_type;
      $event->setlist_id = $request->event_setlist;
      $event->top = $request->top;

      $event->save();


      return back();
    }

    public function listEvent(Request $request)
    {
      $event_id = $request->input('id');

      $events = DB::table('events')->where('id',$event_id)->get();

      return $events;
    }

    public function updateEvent(Request $request)
    {
      $sql_string = "UPDATE events SET 
                     event_name = '".$request->name."', 
                     event_venue = '".$request->venue."', 
                     event_time = '".$request->time."', 
                     event_date = '".$request->date."' WHERE id = '".$request->event_id."'";

      DB::update($sql_string);

      $status = 1;

      return $status;
    }

    public function delEvent(Request $request)
    { 
      $event = $request->input('id');

      DB::table('events')->where('id', $event)->delete();

      $data = "Successfully deleted!";
      return $data;
    }

}
 
  