@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <form action="{{action('DepartmentsController@store')}}" method="POST">
            @csrf
            <label>Department Name: </label>
            <input type="text" name="dept_name" class="form-control">
            <br>
            <label>Department Head Email:</label>
            <input type="email" name="head_mail" class="form-control">
            <br>
            <input type="submit" class="btn btn-primary">
            <br>
        </form>
    </div>
@endsection