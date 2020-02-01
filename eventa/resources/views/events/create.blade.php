@extends('layouts.app')

@section('content')




<div class="row" style="padding:19px;">

<div class="col-md-6">
<p style="text-align:center; margin-bottom:10px;" class="h3 text-primary">Create Events</p>

{!! Form::open(['action' => 'eventsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
  
  <div class="form-group">
    {{Form::label('category', 'Event Category',['class'=>'createlabel'])}}
    {{Form::select('type', ['anniversary'=>'Anniversary','birthday'=>'Birthday','comedy' => 'Comedy Shows','education' => 'Educational','funeral'=>'Funeral','musical' => 'Musical','party'=>'House Party','religious' => 'Religious','seminar' => 'Seminar','wedding' => 'Wedding','workshop' => 'Workshop'], 'null',['class' => 'custom-select','placeholder' => 'Select Category','required' => 'required','autofocus' => 'autofocus'])}}
  
  </div>

  <div class="form-group">
    {{Form::label('state', 'State',['class'=>'createlabel'])}}
    {{Form::select('state', ['abia'=>'Abia','adamawa'=>'Adamawa','anambra' => 'Anambra','education' => 'Educational','funeral'=>'Funeral','musical' => 'Musical','party'=>'House Party','religious' => 'Religious','seminar' => 'Seminar','wedding' => 'Wedding','workshop' => 'Workshop'], 'null',['class' => 'custom-select','placeholder' => 'Select Event State'])}}
  
  </div>

   <div class="form-group">
    {{Form::label('date', 'Event Date',['class' => 'createlabel','required' => 'required','autofocus' => 'autofocus'])}}
    {{Form::date('date', \Carbon\Carbon::now(), ['class' => 'form-control'])}}
  
  </div>

     <div class="form-group">
    {{Form::label('time', 'Event Time',['class' => 'createlabel','required' => 'required','autofocus' => 'autofocus'])}}
    {{ Form::time('time', Carbon\Carbon::now()->format('H:i')) }}
  
  </div>


  <div class="form-group">
    {{Form::label('organiser', 'Event Organiser',['class'=>'createlabel'])}}
    {{Form::text('organiser', '',['class' => 'form-control','placeholder' => 'Company, Individual or Group Name','required' => 'required','autofocus' => 'autofocus'])}}
  
  </div>

  <div class="form-group">
    {{Form::label('address', 'Full Address',['class'=>'createlabel'])}}
    {{Form::text('address', '',['class' => 'form-control','placeholder' => 'Descriptive Full Address','required' => 'required','autofocus' => 'autofocus'])}}
  
  </div>

  <div class="form-group">
    {{Form::label('theme', 'Event Theme',['class'=>'createlabel'])}}
    {{Form::text('theme', '',['class' => 'form-control','placeholder' => 'This is the title on the homepage','required' => 'required','autofocus' => 'autofocus','maxlength' => 34])}}
  
  </div>

  <div class="form-group">
    {{Form::label('topic', 'Topic',['class'=>'createlabel'])}}
    {{Form::text('topic', '',['class' => 'form-control','placeholder' => 'A subheading that relates to the theme','required' => 'required','autofocus' => 'autofocus'])}}
  
  </div>

  <div class="form-group">
    {{Form::label('speakers', 'Speakers',['class'=>'createlabel'])}}
    {{Form::text('speakers', '',['class' => 'form-control','placeholder' => 'Speaker one, Speaker two, ...','required' => 'required','autofocus' => 'autofocus'])}}
    <small id="passwordHelpBlock" class="form-text text-muted">
    Enter the speakers name, special appearance or special guest at the event
    </small>
  </div>

  <div class="form-group">
    {{Form::label('rsvp', 'RSVP',['class'=>'createlabel'])}}
    {{Form::text('rsvp', '',['class' => 'form-control','placeholder' => 'Name, 080839933....','required' => 'required','autofocus' => 'autofocus'])}}
    <small id="passwordHelpBlock" class="form-text text-muted">
    Enter names and contact for RSVP
    </small>
  </div>

  
  <div class="form-group">
    {{Form::label('gatefee', 'Gate Fee',['class'=>'createlabel'])}}
    {{Form::text('gatefee', 'Free',['class' => 'form-control','placeholder'=>'Free'])}}
  </div>

  <div class="form-group">
    {{Form::label('banner')}}<br>
    {{Form::file('banner')}}
    <small id="passwordHelpBlock" class="form-text text-muted">
    Handbill or image of size 590px by 300px
    </small>
  </div><br>
  
  <div class="form-group">
    {{Form::label('otherinfo', 'Other Information',['class'=>'createlabel'])}}
    {{Form::textarea('otherinfo', '',['id' => 'article-ckeditor', 'class' => 'form-control','placeholder' => '   More information about the event'])}}
  
  </div>
    {{Form::submit('submit',['class'=>'btn btn-lg btn-outline-primary pull-right'])}}


{!! Form::close() !!}

</div>

<div class="col-md-6">

</div>

</div>

@endsection