@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-mt-5">
        <a href="/departments/create" class="btn btn-primary">Create Department</a>
    </div>
    <br>
    <table class="table table-striped table-hover">
        <tr><th>Department</th>
        <th>Department Head</th>
        <th>View</th></tr>
        @if (count($depts)>0)
            @for ($i = 0; $i < count($depts); $i++)
            <div class="row">
                <div class="col-md-4">
                    <tr><td>{{$depts[$i]->dept_name}}</td>
                </div>
                <div class="col-md-4">
                    <td>{{$dept_head[$i]->name}}</td>
                </div>
                <div class="col-md-4">
                    <td><a href="/departments/{{$depts[$i]->dept_id}}/teams" class="btn btn-primary">View</a></td></tr>
                </div>
            </div>
            <br>
            @endfor
            @else
            <h1>No Departments Available</h1>
            @endif
                <tr></tr>
            </table>
    </div>
    @endsection