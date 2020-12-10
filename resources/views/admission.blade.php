@extends('layouts.guest')
@section('tilte', 'admission')
@section('content')
    <div class="p-1 m-0 bg-orange w-100"></div>
    <div class="container-fluid milk">
        <div class="container ">
            <div class="row">
                @if(session('success'))
                <div class="col-12">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong><i class="fa fa-check-circle" aria-hidden="true"></i></strong> {{ session('success') }}
                            <div class="btn btn-outline-color text-center small">
                                Already Applied <a href="https://paystack.com/buy/acce-admission"
                                    class="text-color-2 strong ml-2" target="iframe_a">Pay for Admission Form</a>
                            </div>
                        </div>
                        <iframe src="demo_iframe.htm" name="iframe_a" title="Iframe Example" class="w-100" style="height: 200px"></iframe>
                    </div>
                @endif
                <img src="image/slab.jpg" alt="" class="d-block w-100">
                <div class="p-2 bg-orange w-100"></div>
            </div>
            <div class="row justify-content-center mb-2 p-3 p-md-4 bg-white">
                <div class="col-sm-10 col-lg-8 rounded bg-white my-3">
                    <h4 class="oswald mb-2 text-center text-color">Apply For Admission</h4>
                    <form action="{{ route('admission.store') }}" method="post"
                        class="p-sm-2 p-3 border rounded w-100 mb-4">
                        @csrf
                        <!--<marquee behavior="scroll" direction="right" class="text-center m-0 p-0">-->
                        <!--    <h6 class="bg-color text-center text-white py-2 w-100">-->
                        <!--        Admission Form Cost &#8358;5,000-->
                        <!--        </h6>-->
                        <!--</marquee>-->
                        
 {{-- parents --}}
                      <fieldset class="mb-2">
                            <legend>PARENT'S/GUARDIAN DETAILS</legend>
                            <div class="form-group">
                                <label for="father">Name</label>
                                <input type="text" name="parentname" id="" class="form-control" placeholder=""
                                    value="{{ old('parentname') }}">
                                @error('parentname')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="Relationship">Relationship</label>
                                <select name="relationship" id="relationship" class="form-control"
                                    value="{{ old('relationship') }}">
                                    @foreach ($relationships as $relationship)
                                        <option {{ old('relationship') == $relationship ? 'selected' : 'Select relationship' }} value="{{ $relationship ?? 'Select relationship' }}">{{ $relationship ?? 'Select relationship' }}</option>
                                    @endforeach
                                </select>
                                @error('relationship')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="father">Occupation</label>
                                <input type="text" name="occupation" id="" class="form-control" placeholder=" "
                                    value="{{ old('occupation') }}">
                                @error('occupation')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="father">Contact Address</label>
                                <input type="text" name="address" id="" class="form-control" placeholder="Contact Address"
                                    value="{{ old('address') }}">
                                @error('address')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-dark"> <img src="/image/ngn.gif" alt="+234"
                                                class="mr-2" style="max-width: 25px"> +234</span>
                                    </div>
                                    <input type="number" name="phone" id="" class="form-control" placeholder="Phone Number"
                                        value="{{ old('phone') }}">
                                </div>
                                @error('phone')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="" class="form-control" placeholder="Email "
                                    value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="father">State of Origin</label>
                                <select name="state" class="form-control" id="state" value="{{ old('state') }}">
                                    <option value="state">Select State of Origin</option>
                                    @foreach ($states as $state)
                                        <option {{ old('state') == $state ? 'selected' : '' }}  value="{{ $state }}">{{ $state }}</option>

                                    @endforeach
                                </select>
                                @error('state')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </fieldset>

                        <fieldset class="m-2">
                            <legend>APPLICANT'S DETAILS</legend>
                            <div class="w-100 student">
                                <div class="form-group border p-2">
                                    <label for="school" class="mb-0 strong">Select School</label><br>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline1" name="school"
                                            class="custom-control-input" value="nursery" {{ old('school')=="nursery" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <label class="custom-control-label" for="customRadioInline1">Nursery</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline2" name="school"
                                            class="custom-control-input" value="primary" {{ old('school')=="primary" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <label class="custom-control-label" for="customRadioInline2">Primary</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline3" name="school"
                                            class="custom-control-input" value="secondary" {{ old('school')=="secondary" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <label class="custom-control-label" for="customRadioInline3">Secondary</label>
                                    </div>
                                    @error('school')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                {{-- name --}}
                                <div class="w-50 float-left">
                                    <input type="text" name="studentname" id="" class="form-control"
                                        placeholder="student name" value="{{ old('studentname') }}">
                                    @error('studentname')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="w-50 float-left">
                                    <input type="date" name="dob" id="date" class="form-control" placeholder="date of birth"
                                        value="{{ old('dob') }}">
                                    @error('dob')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group d-flex justify-content-between row mt-3">
                                <div class="col-md-6">
                                    <label for="gender" class="mb-0 strong">Gender</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="gender" class="custom-control-input"
                                             value="male" {{ old('gender')=="male" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <label class="custom-control-label" for="customRadio1">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="gender" class="custom-control-input"
                                        value="female" {{ old('gender')=="female" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <label class="custom-control-label" for="customRadio2">Female</label>
                                    </div>
                                    @error('gender')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="class" class="mb-0 strong">Class for which admission is sought</label>
                                <div class="input-group mb-3">
                                    <select name="class" id="" class="form-control mb-1" value="{{ old('class') }}">
                                        @foreach ($classes as $class)
                                            <option {{ old('class') == $class ? 'selected' : '' }} value="{{ $class }}">
                                                {{ $class }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-success" type="button" data-toggle="modal"
                                            data-target="#modal">Show Fees</button>
                                    </div>
                                    @error('class')
                                        <span class="text-danger mt-0"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="table-responsive modal fade bg-white" id="modal">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">School Fees</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <table class="table table-bordered table-striped modal-body">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th class="w-25">Class</th>
                                                        <th>First Term</th>
                                                        <th>Second term</th>
                                                        <th>Third Term</th>
                                                        <th>Yearly</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center">
                                                    <tr>
                                                        <td>
                                                            Nursery 1
                                                        </td>
                                                        <td>&#8358;360,000</td>
                                                        <td>&#8358;280,000</td>
                                                        <td>&#8358;280,000</td>
                                                        <td>&#8358;920,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Nursery 2
                                                        </td>
                                                        <td>&#8358;375,000</td>
                                                        <td>&#8358;295,000</td>
                                                        <td>&#8358;295,000</td>
                                                        <td>&#8358;965,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Reception
                                                        </td>
                                                        <td>&#8358;390,000</td>
                                                        <td>&#8358;315,000</td>
                                                        <td>&#8358;315,000</td>
                                                        <td>&#8358;1,020,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Primary 1
                                                        </td>
                                                        <td>&#8358;475,000</td>
                                                        <td>&#8358;380,000</td>
                                                        <td>&#8358;380,000</td>
                                                        <td>&#8358;1,235,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Primary 2
                                                        </td>
                                                        <td>&#8358;500,000</td>
                                                        <td>&#8358;400,000</td>
                                                        <td>&#8358;400,000</td>
                                                        <td>&#8358;1,300,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Primary 3
                                                        </td>
                                                        <td>&#8358;500,000</td>
                                                        <td>&#8358;400,000</td>
                                                        <td>&#8358;400,000</td>
                                                        <td>&#8358;1,300,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            JSS 1
                                                        </td>
                                                        <td>&#8358;600,000</td>
                                                        <td>&#8358;470,000</td>
                                                        <td>&#8358;470,000</td>
                                                        <td>&#8358;1,540,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            JSS 2
                                                        </td>
                                                        <td>&#8358;600,000</td>
                                                        <td>&#8358;470,000</td>
                                                        <td>&#8358;470,000</td>
                                                        <td>&#8358;1,540,000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>


                            <div class="form-group">
                                <label for="previous" class="mb-0 strong">Previous school name and class</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="previousschool" id="" class="form-control"
                                        placeholder="Name of Prevoius school">
                                    @error('previousschool')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                    <div class="input-group-append">
                                        <select name="previousclass" id="" class="form-control bg-color text-white"
                                            placeholder="Class in Prevoius school">
                                            <option value="Select Class">Select Class</option>
                                            <option value="Reception/Day Care">Reception/Day Care</option>
                                            <option value="Nursery 1">Nursery 1</option>
                                            <option value="Nursery 2">Nursery 2</option>
                                            <option value="Primary 1">Primary 1</option>
                                            <option value="Primary 2">Primary 2</option>
                                            <option value="Primary 3">Primary 3</option>
                                            <option value="JSS 1">JSS 1</option>
                                            <option value="JSS 2">JSS 2</option>
                                        </select>
                                        @error('previousclass')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <button type="button" class="btn btn-success add">Add more Students</button>
                            </div> --}}
                        </fieldset>
                        <!--<h5 class="bg-color-2 text-center text-white py-2 w-100">-->
                        <!--        Admission Form Cost &#8358;5,000-->
                        <!--        </h5>-->
                        <div class="form-group">
                            <button type="submit" class="btn w-100 btn-color">Submit Application</button>
                        </div>
                        <!--<div class="form-group small">-->
                        <!--   <div class="btn btn-outline-color text-center small">-->
                        <!--        Already Applied <a href="https://paystack.com/buy/acce-admission"-->
                        <!--            class="text-color-2 strong ml-2" target="iframe_a">Pay for Admission Form</a>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </form>
                   
                </div>
                <div class="col-sm-10 col-md-4 col-lg-2 my-3 bg-white">
                    <a href="/files/ACCE-Admission-form.pdf" class="btn max-150 w-100 btn-color btn-lg my-1 my-md-2" download>
                        <i class="fas fa-2x fa-cloud-download-alt mr-2 mr-md-3"></i>
                        Download Pre-Application Form
                    </a>
                    <button class=" btn max-150 w-100 btn-color btn-lg my-1 my-md-2">
                        <i class="fa fa-address-book fa-2x mr-2 mr-md-3" aria-hidden="true"></i>
                        Application Procedure
                    </button>
                    <button class=" btn max-150 w-100 btn-color btn-lg my-1 my-md-2">
                        <i class="fa fa-graduation-cap fa-2x mr-2 mr-md-3" aria-hidden="true"></i>
                        Academic Performance
                    </button>

                </div>
            </div>
        </div>
    </div>

@endsection
