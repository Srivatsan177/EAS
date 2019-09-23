@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{action('TeamsController@store',$dept_id)}}" method="POST">
            @csrf
            <label>Team Name</label>
            <input type="text" name="team_name" class="form-control">
            <br>
            <label>Leader Email: </label>
            <input type="email" name="head_email" class="form-control">
            <br>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
@endsection