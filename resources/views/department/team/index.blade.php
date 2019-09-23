@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/departments/{{$dept_id}}/teams/create" class="btn btn-primary">Create Team</a>
        <br>
        <br>
        @if (count($teams)>0)
            <div class="row">
                <div class="col-md-4">
                    <h2>Team Name</h2>
                </div>
                <div class="col-md-4">
                    <h2>Leader</h2>
                </div>
                <div class="col-md-4">
                    <h2>View</h2>
                </div>
            </div>
            <br>
            @for ($i = 0; $i < count($teams); $i++)
                <div class="row">
                    <div class="col-md-4">
                        <strong>{{$teams[$i]->team_name}}</strong>
                    </div>
                    <div class="col-md-4">
                        <strong>{{$team_heads[$i]->name}}</strong>
                    </div>
                    <div class="col-md-4">
                        <a href="/departments/{{$dept_id}}/teams/{{$teams[$i]->team_id}}/" class="btn btn-primary">View</a>
                    </div>
                </div>
                <br><br>
            @endfor
        @else
            <h1>No Teams</h1>
        @endif
    </div>
@endsection