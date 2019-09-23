@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/departments/{{$dept_id}}/teams/{{$team_id}}/store_member" method="POST">
            @csrf
            <label>Email:</label>
            <input type="email" name="email" class="form-control">
            <br>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
@endsection