@extends('layouts.guest')
@section('tilte', 'admission')
@section('content')
    <div class="p-1 m-0 bg-orange w-100"></div>
    <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-center mb-2 p-3 p-md-4">
                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6 rounded my-3">
                    <div class="card alert-success">
                      <div class="card-body p-5 text-center">
                        <h4 class="card-title text-center"><i class="fa fa-check-circle text-success fa-4x" aria-hidden="true"></i></h4>
                        <p class="card-text p-2">Your Application has been submitted for review, we will get back to you through email and phone you provided, and the details of entrance date will be sent to you.</p>
                       <a href="{{ route('admission') }}" class="text-color-2 p-2 btn-orange bg-white btn btn-sm">Return back to admission page Here</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
