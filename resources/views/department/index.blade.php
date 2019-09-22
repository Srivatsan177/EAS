@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-6">
            <a href="" class="btn btn-primary">Create Department</a>
        </div>
        <br>
        @if (count($depts)>0)
            
        @else
        <h1>No Departments Available</h1>
        @endif
    </div>
@endsection