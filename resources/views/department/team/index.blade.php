@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped">
        @if (count($teams)>0)
                <th><tr>Team Name</tr></th>
                <th><tr>Leader</tr></th>
                <th><tr>View</tr></th>
            @for ($i = 0; $i < count($teams); $i++)
                <div class="row">
                    <div class="col-md-4">
                        <tr><td>{{$teams[$i]->team_name}}</td>
                    </div>
                    <div class="col-md-4">
                        <td>{{$team_heads[$i]->name}}</td>
                    </div>
                    <div class="col-md-4">
                        <td><a href="/departments/{{$dept_id}}/teams/{{$teams[$i]->team_id}}/" class="btn btn-primary">View</a></td></tr>
                    </div>
            @endfor
        </table>
        @else
            <h1>No Teams</h1>
        @endif
    </div>
@endsection