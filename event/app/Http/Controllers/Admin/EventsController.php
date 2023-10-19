<?php

namespace App\Http\Controllers\Admin;
use App\Models\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    //
    public function index()
    {

        $event=Event::all();
        return view('admin.events')->with('event',$event);
    }
    public function new()
    {
        return view('admin.newevent');
    }
    public function store(Request $request)
    {
        $event=new Event();        //instance of eloquent model created
        $event->title= $request->input('title');
        $event->organiser= $request->input('organiser');
        $event->venue= $request->input('venue');
        $event->description= $request->input('description');
        $event->date= $request->input('date');


        $event->save();
        return redirect('/events')->with('success','event added');
    }   
}
