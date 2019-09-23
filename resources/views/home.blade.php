{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <a href="/departments" class="btn btn-warning">Departments</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@extends('layouts.app')

@section('content')

    <div class="page-wrapper">

        <div class="page-breadcrumb">
           
           
        </div>

        <div class="container-fluid">
          
            
            <h4 > </h4><br>
            <div class="row">
                <!-- Column -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-success text-center"><a href ="{{route('user')}}">
                            <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                            <h5 class="m-b-0 m-t-5 text-white">{{ $users->total() }}</h5>
                            <h6 class="text-white">Total employees</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                
               
                <a href="/departments" class="btn btn-warning">Departments</a>

                
            </div>
           
           
            
            

                
            </div>
            
          

        </div>
    </div>

@endsection

@section('js')


    @endsection
