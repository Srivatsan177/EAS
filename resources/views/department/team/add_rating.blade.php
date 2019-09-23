@extends('layouts.app')

@section('content')
    <div class="container">

        {{-- <form action="/departments/{{$dept_id}}/teams/{{$team_id}}/{{$uid}}/store_rating" method="POST">
            @csrf
            <label>Task id:</label>
            <input type="text" name="task" class="form-control">
            <br>
            <label>Task rating:</label>
            <select id="rating" type="text" class="form-control{{ $errors->has('rating') ? ' is-invalid' : '' }}" name="rating" value="{{ old('role') }}" required autofocus>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            <br>
            <label>Task comment:</label>
            <input type="text" name="comment" class="form-control">
            <br>
            <input type="submit" class="btn btn-primary">
        </form> --}}
    <form action="/departments/{{$dept_id}}/teams/{{$team_id}}/{{$users[$i]->id}}/store_rating" method="POST">
            @csrf
            <label>Task id:</label>
            <input type="text" name="task" class="form-control">
            <br>
            <label>Task rating:</label>
            <select id="rating" type="text" class="form-control{{ $errors->has('rating') ? ' is-invalid' : '' }}" name="rating" value="{{ old('role') }}" required autofocus>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            <br>
            <label>Task comment:</label>
            <input type="text" name="comment" class="form-control">
            <br>
            <input type="submit" class="btn btn-primary">
            
            
        </form>
    </div>
@endsection