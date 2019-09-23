@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-6">
            <a href="/user/create" class="btn btn-primary">Add User</a>
        </div>
        <br>
        {{-- @if (count($)>0)
            
        @else
        <h1>No User Available</h1>
        @endif --}}
    </div>
@endsection