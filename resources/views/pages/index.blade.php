@extends('layouts/app')

@section('content')
<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
        <div class="jumbotron header-shadow">

                <div class="container mt-5">
                  <h1 class="display-3">Employee Assessment System</h1>
                  <p></p>
                </div>
              </div>
  <div class="container">

    <div class="row">
    <div class="col-md-3 services-tab text-justify">
    <img class="rounded mx-auto d-block" src="{{URL::asset('/img/customize.png')}}" alt="profile Pic" height="100" width="100">
       <h1 class="text-justify">FULLY CUSTOMIZABLE</h1>
        <p>
            From rating scales and branding to language and currency, change the software to suit your needs. We cater to a diverse set of industries each with its own specialized requirements.
       </p>
    </div>
    <div class="col-md-3 services-tab text-justify">
        <img class="rounded mx-auto d-block" src="{{URL::asset('/img/simple.png')}}" alt="profile Pic" height="100" width="100">
        <h1 class="text-justify">SIMPLE TO USE</h1>
        <p>Designed to be simple and easy to use. Most users complete their first evaluation in a matter of minutes, videos, in line tips and our library of templates help along the way.</p>
    </div>
    <div class="col-md-3 services-tab text-justify">
            <img class="rounded mx-auto d-block" src="{{URL::asset('/img/support.png')}}" alt="profile Pic" height="100" width="100">
    
        <h1 class="text-justify">CUSTOMER SUPPORT</h1>
        <p>Guided rollout is included with all our plans, send us job descriptions and we will set up your evaluations. Expert HR advice is available to all customers free</p>
    </div>
</div>
                         
  </div>
</main>

@endsection