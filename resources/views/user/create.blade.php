@extends('layouts.app')
@section('content')
    <div class="container">
        @csrf
        <form action="" class="form-group">
            <label for="name">Name : </label>
            <input type="text" placeholder="Enter name here">
            <label for="email">Email ID : </label>
            <input type="email" placeholder="Enter email here">
            <label for="password">Password : </label>
            <input type="text" placeholder="Enter Password here">
            <label for="role">Role</label>

        </form>
    </div>
@endsection