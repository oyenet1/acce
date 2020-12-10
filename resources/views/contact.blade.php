@extends('layouts.guest')
@section('title' . 'contact us')
@section('content')
    <!-- contact map -->
    <div class="relative-1 text-center mb-n3 ">
        <img src="image/IMG-20200922-WA0017.jpg" alt="" class="w-100">
        <div class="padding-5 bg-color mb-n2 mt-0">
            <div class="d-block mx-auto">
                <h4 class="teko p-5 display-3 text-color-2">Contact Us</h4>
            </div>
        </div>
        <p class="bg-orange w-100 p-3"></p>
    </div>
    <!-- maps -->
    <div class="container">
        <div class="row margin-minus">
            <iframe width="100%" height="600" frameborder="0" scrolling="no"
                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Charly%20boy%20house,%20gwarimpa+(ACCE-ABUJA)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            {{-- <a href="https://www.maps.ie/route-planner.htm"
                class="rounded rounded">Driving Route Planner</a> --}}
            <p class="bg-orange w-100 p-3"></p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-6">
                @if (session('success'))
                    <div class="alert alert-success session alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong> <i class="fa fa-check-circle" aria-hidden="true"></i> </strong>  {{ session('success') }}
                    </div>
                @endif
                <h2 class="teko text-color-2">Contact Us</h2>
                <form action="{{ route('contact.store') }}" class="m-0 py-3" method="POST">
                    @csrf
                    <div class="form-group d-flex justify-content-between row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" id="" class="form-control" placeholder="Name" value="{{ old('name') }}" >
                            @error('name')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="email" id="" class="form-control " placeholder="Email" value="{{ old('email') }}" >
                            @error('email')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>

                    </div>
                    <div class="form-group d-flex justify-content-between row">
                        <div class="form-group col-md-6">
                            <input type="number" name="phone" id="" class="form-control " placeholder="Phone" value="{{ old('phone') }}" >
                            @error('phone')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="subject" id="" class="form-control " placeholder="Subject" value="{{ old('subject') }}" >
                            @error('subject')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>

                    </div>
                    <div class="form-group">
                        @error('message')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                        <textarea name="message" id="message" cols="30" rows="10"
                    class="form-control" placeholder="Your Message here" value="{{ old('message') }}" >{{ old('message') }}</textarea>

                    </div>

                    <button class="btn-color small btn float-right my-2">Send Message</button>
                </form>
            </div>
            <div class="col-lg-10 col-xl-6">
                <h2 class="teko text-color-2">Get in Touch</h2>
                <div class="row">
                    <div class="col-sm-6 p-3 p-lg-4 rounded">
                        <div class="milk w-100 max-150 border border-success rounded text-center p-3">
                            <span class="text-dark">
                                <i class="text-color fa fa-map-marker-alt fa-2x" aria-hidden="true"></i>
                                <p class="px-2 mt-2">Plot 81 Kafe District, Opposite Majia Plaza, Adjacent Saraha Estate, Gwarinpa, Abuja.</p>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-3 p-lg-4 rounded">
                        <div class="milk w-100 max-150 border border-success rounded px-md-3 p-3 text-center py-md-5">
                            <span class="text-dark">
                                <i class="text-color fas fa-envelope fa-2x"></i> <br>
                                <a href="mailto:info@acce-abuja.com.ng" class="text-dark">info@acce-abuja.com.ng</a>
                            </span>
                        </div>

                    </div>
                    <div class="col-sm-6 p-3 p-lg-4 rounded">
                        <div class="milk w-100 max-150 border border-success rounded p-md-5 p-3 text-center">
                            <span class="text-dark">
                                <i class="text-color fa fa-phone-volume fa-2x" aria-hidden="true"></i> <br>
                                <a href="tel:+2349070596302" class="text-dark"> (+234)
                                    907-0596-302</a>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-3 p-lg-4 rounded">
                        <div class="milk w-100 max-150 border border-success rounded px-md-3 p-3 text-center py-md-5">
                            <span class="text-dark">
                                <i class="fas fa-fax fa-2x text-color"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
