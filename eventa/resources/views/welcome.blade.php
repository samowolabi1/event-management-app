@extends('layouts.app')

@section('content')
@include('inc.header')

 
    
 
{{-- rows --}}

@foreach($events->chunk(4) as $eventchunk)
  <div class="row boxpad">
  @foreach($eventchunk as $event)

        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100 text-center">
            <a href="#"><img style="width:300px; height:280px;" class="card-img-top" src="/storage/banners/{{$event->banner}}" alt="Event Banner Image"></a>
            <div class="card-body">
              <h2 class="font-weight-bold indigo-text mb-3">
                {{$event->theme}}
              </h2>
              <p class="h5">Category: {{$event->type}}</p>
              <p class="h5"><i class="fa fa-calendar"></i>   {{$event->date}}</p>
              <p class="h5"><i class="fa fa-map-marker"></i>   {{$event->state}}</p>
              <p class="h5">Organiser: {{$event->organiser}}</p>
              <p style="text-align:center;"><button class="btn"><a href="/events/{{$event->id}}">More Details</a></button></p>
            </div>
          </div>
        </div>
       @endforeach
      </div>
      @endforeach
      <!-- /.row -->
    

@endsection