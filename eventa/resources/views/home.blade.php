@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome to your Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/events/create" class="btn btn-primary">Create Events</a>
                    <hr style="margin:10px 0px 10px 0px;">


                  
                @if(count($even) > 0)
                    <table class="table table-striped">
                    <tr>
                        <td style="color:#0091dc;">Event Theme</td>
                        <td style="color:#0091dc;">Event Topic</td>
                        <td></td>
                    
                    </tr>
                    @foreach($even as $event)
                        <tr>
                            <td>{{$event->theme}}</td>
                            <td>{{$event->topic}}</td>
                            <td><a href="/events/{{$event->id}}/edit" class="btn btn-default">Edit</a></td>
                            {{-- <td>
                                {!! Form::open(['action' => ['eventsController@destroy', $event->id], 'method' => 'POST', 'class'=>'pull-right']) !!}

                                {{Form::hidden('_method','DELETE')}}

                                {{Form::submit('Delete',['class' => 'btn btn-danger'])}}

                                {!! Form::close() !!}  
                            </td> --}}
                        </tr>
                    @endforeach
                    </table>
                    @else
                        <p>You have not created any event</p>
                    @endif 

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
