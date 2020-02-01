@extends('layouts.app')

@section('content')


<div class="row" style="padding:19px;">

<div class="col-md-6">
<p style="text-align:center; margin-bottom:10px;" class="h3 text-primary">Edit Event</p>

{!! Form::open(['action' => ['eventsController@update', $event->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
  

  <div class="form-group">
    {{Form::label('organiser', 'Event Organiser')}}
    {{Form::text('organiser', $event->organiser,['class' => 'form-control','required' => 'required','autofocus' => 'autofocus'])}}
  
  </div>

  <div class="form-group">
    {{Form::label('address', 'Full Address')}}
    {{Form::text('address', $event->address,['class' => 'form-control','required' => 'required','autofocus' => 'autofocus'])}}
  
  </div>

  <div class="form-group">
    {{Form::label('theme', 'Event Theme')}}
    {{Form::text('theme', $event->theme,['class' => 'form-control','required' => 'required','autofocus' => 'autofocus'])}}
  
  </div>

  <div class="form-group">
    {{Form::label('topic', 'Topic')}}
    {{Form::text('topic',$event->topic,['class' => 'form-control','required' => 'required','autofocus' => 'autofocus'])}}
  
  </div>

  <div class="form-group">
    {{Form::label('speakers', 'Speakers')}}
    {{Form::text('speakers', $event->speakers,['class' => 'form-control','required' => 'required','autofocus' => 'autofocus'])}}
    <small id="passwordHelpBlock" class="form-text text-muted">
    Enter the speakers name, special appearance or special guest at the event
    </small>
  </div>

  <div class="form-group">
    {{Form::label('rsvp', 'RSVP')}}
    {{Form::text('rsvp', $event->rsvp,['class' => 'form-control','required' => 'required','autofocus' => 'autofocus'])}}
    <small id="passwordHelpBlock" class="form-text text-muted">
    Enter names and contact for RSVP
    </small>
  </div>

  
  <div class="form-group">
    {{Form::label('gatefee', 'Gate Fee')}}
    {{Form::text('gatefee', $event->gatefee,['class' => 'form-control'])}}
  </div>

  <div class="form-group">
    {{Form::label('banner')}}<br>
    {{Form::file('banner')}}
  </div><br>
  
  <div class="form-group">
    {{Form::label('otherinfo', 'Other Information')}}
    {{Form::textarea('otherinfo',$event->otherinfo,['id' => 'article-ckeditor', 'class' => 'form-control'])}}
  
  </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('submit',['class'=>'btn btn-lg btn-outline-primary pull-right'])}}


{!! Form::close() !!}

</div>

<div class="col-md-6">

</div>

</div>

@endsection