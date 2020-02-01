@extends('layouts.app')

@section('content')

<a href="{{ URL::previous() }}"><button class="btn btn-info">Go Back</button></a>

<p style="text-align:center; margin-bottom:10px;" class="h3 text-primary"></p>


<div class="well">
<div class="row" style="padding:19px;">


<div class="col-md-4 col-sm-4">

  <img style="width:300px; height:300px;" class="rounded image-fluid" src="/storage/banners/{{$event->banner}}" alt="Event Banner Image">
  

</div>

<div class="col-md-8 col-sm-8">


              <h4 class="card-title">
                <p>{{$event->theme}}</p>
              </h4>
              <p class="card-text text-bold "><span class="text-primary">Category:</span> {{$event->type}}</p>
              <p class="card-text"><span class="text-primary">Date:</span> {{$event->date}} | <span class="text-primary">Time:</span> {{$event->time}} | <span class="text-primary">Gate Fee:</span> {{$event->gatefee}}</p>
              <p class="card-text"><span class="text-primary">State:</span> {{$event->state}} | <span class="text-primary">Full Address:</span>: {{$event->address}}</p>
              <p class="card-text"><span class="text-primary">RSVP:</span> {{$event->rsvp}}</p>
              <p class="card-text"><span class="text-primary">Organiser:</span> {{$event->organiser}}</p>
              <p class="card-text"><span class="text-primary">Sub Heading:</span> {{$event->topic}}</p>
              <p class="card-text"><span class="text-primary">Other Information:</span> {{$event->otherinfo}}</p>

</div>


</div>

</div>

@endsection