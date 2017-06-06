<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use App\Event;
Use App\Mail\Reservation;


class EventController extends Controller
{
    public function index()
    {
        return view('event/list', ['events' => Event::orderBy('start_time')->get()]);
    }

    public function create()
    {
        return view('event/create');
    }

    public function store(Request $request)
    {
        $time = explode(" - ", $request->input('time'));
        $event = new Event;
        $event->name = $request->input('name');
        $event->title = $request->input('title');
        $event->start_time = $time[0];
        $event->end_time = $time[1];
        $event->save();
        $ivykis = $event;
        \Mail::to($request->user())->send(new Reservation($ivykis));
        $request->session()->flash('success', 'The event was successfully saved!');
        return redirect('events');
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        $first_date = new DateTime($event->start_time);
        $second_date = new DateTime($event->end_time);
        $difference = $first_date->diff($second_date);
        $data = [
            'page_title' => $event->title,
            'event' => $event,
            'duration' => $this->format_interval($difference)
        ];
        return view('event/view', $data);
    }

    public function edit($id)
    {
        return view('event/edit', ['event' => Event::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $time = explode(" - ", $request->input('time'));
        $event = Event::findOrFail($id);
        $event->name = $request->input('name');
        $event->title = $request->input('title');
        $event->start_time = $time[0];
        $event->end_time = $time[1];
        \Mail::to($request->user())->send(new Reservation($event));
        $event->save();
        $request->session()->flash('success', 'The event was successfully updated!');
        return redirect('events');
    }

    public function destroy(Request $request, $id)
    {
        $event = Event::find($id);
        $event->delete();
        $request->session()->flash('success', 'The event was successfully deleted!');
        return redirect('events');
    }

    public function change_date_format($date)
    {
        $time = DateTime::createFromFormat('d/m/Y H:i:s', $date);
        return $time->format('Y-m-d H:i:s');
    }

    public function change_date_format_fullcalendar($date)
    {
        $time = DateTime::createFromFormat('Y-m-d H:i:s', $date);
        return $time->format('d/m/Y H:i:s');
    }

    public function format_interval(\DateInterval $interval)
    {
        $result = "";
        if ($interval->y) {
            $result .= $interval->format("%y year(s) ");
        }
        if ($interval->m) {
            $result .= $interval->format("%m month(s) ");
        }
        if ($interval->d) {
            $result .= $interval->format("%d day(s) ");
        }
        if ($interval->h) {
            $result .= $interval->format("%h hour(s) ");
        }
        if ($interval->i) {
            $result .= $interval->format("%i minute(s) ");
        }
        if ($interval->s) {
            $result .= $interval->format("%s second(s) ");
        }
        return $result;
    }
}
