@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>{{$user->name}}</h2>
            </div>
            <div class="col-md-4">
                <a href="/departments/{{$dept_id}}/teams/{{$team_id}}/{{$user->id}}/create_rating">Add Task and Rating</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                
            </div>
        </div>
    </div>
@endsection