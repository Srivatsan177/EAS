@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-6">
            <a href="/departments/create" class="btn btn-primary">Create Department</a>
        </div>
        <br>
        @if (count($depts)>0)
            <div class="row">
                <div class="col-md-4">
                    <strong>Department</strong>
                </div>
                <div class="col-md-4">
                    <strong>Department Head</strong>
                </div>
                <div class="col-md-4">
                    <strong>View</strong>
                </div>
            </div>
            <br>
            @for ($i = 0; $i < count($depts); $i++)
                <div class="row">
                    <div class="col-md-4">
                        <strong>{{$depts[$i]->dept_name}}</strong>
                    </div>
                    <div class="col-md-4">
                        <strong>{{$dept_head[$i]->name}}</strong>
                    </div>
                    <div class="col-md-4">
                        <a href="/departments/{{$depts[$i]->dept_id}}/teams" class="btn btn-primary">View</a>
                    </div>
                    <div>

                        {{-- <a href="{{ route('posts.show',$team->id) }}" class="btn btn-primary btn-sm">View Rating</a> --}}

                    </div>
                </div>
                <br>
            @endfor
        @else
        <h1>No Departments Available</h1>
        @endif
    </div>
@endsection