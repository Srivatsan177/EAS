@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/departments/{{$dept_id}}/teams/{{$team_id}}/add_member" class="btn btn-primary">Add Member</a>
        <br><br>
        <div class="row">
            <div class="col-md-6">
                <h2>Name</h2>
            </div>
            <div class="col-md-6">
                <h2>View Details</h2>
            </div>
        </div>
            @for ($i = 0; $i < count($users); $i++)
                <div class="row">
                    <div class="col-md-6">
                        {{$users[$i]->name}}
                    </div>
                    <div class="col-md-6">
                        <a href="#" class="btn btn-primary">View Details</a>                        
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection