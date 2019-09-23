@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <a href="/departments" class="btn btn-warning">Departments</a>
                    <button type="button"class="btn btn-warning" data-toggle="modal" data-target="#empview" class="btn btn-sm btn-primary">Add User </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="empview" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
                    <h4 class="modal-title">Add User</h4>
              
            </div>
            <div class="modal-body">
                   
              
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">{{ __('Register') }}</div>
                
                                <div class="card-body">
                                    <form method="POST" action="{{action('UsersController@store')}}">
                                        @csrf
                
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                
                                            <div class="col-md-6">
                                                <select id="role" type="text" class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" name="role" value="{{ old('role') }}" required autofocus>
                                                    @if(Auth::user()->role==0)
                                                    <option value="1">Department Head</option>
                                                    <option value="2">Team Head</option>
                                                    <option value="3">Member</option>
                                                    @elseif(Auth::user()->role==1)
                                                    
                                                    <option value="2">Team Head</option>
                                                    <option value="3">Member</option>
                                                    @elseif(Auth::user()->role==2)
                                                    
                                                   
                                                    <option value="3">Member</option>
                                                    @endif
                                                </select>
                                                @if ($errors->has('role'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('role') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                
                    </div>   
                     
                </div>
            </div>
        </div>
        </div>

@endsection
{{-- @extends('layouts.app')

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


    @endsection --}}
