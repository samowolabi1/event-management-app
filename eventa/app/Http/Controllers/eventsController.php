<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\event;


class eventsController extends Controller
{
 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::orderBy('created_at','desc')->paginate(12);

        return view('events.index')->with('events',$events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validatedData = $request->validate([
           'type'=>'required',
           'state'=>'required',
           'date'=>'required',
           'gatefee'=>'required',
           'time'=>'required',
           'organiser'=>'required',
           'address'=>'required',
           'theme'=>'required',
           'topic'=>'required',
           'otherinfo'=>'required',
           'banner'=>'image|nullable|max:1999' 
        ]);

        //file upload
        if($request->hasFile('banner')){
            //Get filename with extension
            $filenamewithExt = $request->file('banner')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('banner')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('banner')->storeAs('public/banners', $fileNameToStore);;
        }else{
            $fileNameToStore = 'defaultimmg.jpg';

        }


        $event = new event;
        $event->type = $request->input('type');
        $event->organiser = $request->input('organiser');
        $event->theme = $request->input('theme');
        $event->topic = $request->input('topic');
        $event->speakers = $request->input('speakers');
        $event->rsvp = $request->input('rsvp');
        $event->gatefee = $request->input('gatefee');
        $event->otherinfo = $request->input('otherinfo');
        $event->address = $request->input('address');
        $event->date = $request->input('date');
        $event->time = $request->input('time');
        $event->state = $request->input('state');
        $event->banner = $fileNameToStore;
        $event->user_id = auth()->user()->id;
        $event->save();

        return redirect('/events')->with('events', 'Event Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $events = Event::find($id);

        return view('events.show')->with('event',$events);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        // check for current user
        // if(auth()->user()->id !== $event->user_id){

        //     return redirect('/home')->with('error', 'Unauthorized Page');

        // }

        return view('events.edit')->with('event',$event);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

          //validation
          $this->validate($request, [
            'organiser'=>'required',
            'address'=>'required',
            'gatefee'=>'required',
            'theme'=>'required',
            'topic'=>'required',
            'otherinfo'=>'required',
            'banner'=>'image|nullable|max:1999' 
        ]);

         //handle file upload
         if($request->hasFile('banner')){
            //Get filename with extension
            $filenamewithExt = $request->file('banner')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('banner')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('banner')->storeAs('public/banners', $fileNameToStore);;
        }

        //update post
        $event = event::find($id);
        $event->organiser = $request->input('organiser');
        $event->theme = $request->input('theme');
        $event->topic = $request->input('topic');
        $event->speakers = $request->input('speakers');
        $event->rsvp = $request->input('rsvp');
        $event->gatefee = $request->input('gatefee');
        $event->otherinfo = $request->input('otherinfo');
        $event->address = $request->input('address');
        if($request->hasFile('banner')){
            $event->banner = $fileNameToStore;
        }
        $event->user_id = auth()->user()->id;
        $event->save();

        return redirect('/events')->with('success', 'Event Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $event = event::find($id);
        // check for current user
       

        if($event->banner != 'defaultimmg.jpg'){
            //Delete image
            Storage::delete('public/banners/'.$event->banner);

        }

        
        $event->delete();

        return redirect('/home')->with('success', 'Event Removed');

    }
}
