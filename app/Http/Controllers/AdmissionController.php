<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Mail\AdmissionMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $states = [
            'Federal Capital Territory (FCT)',
            'Abia',
            'Adamawa',
            'Akwa ibom',
            'Anambra',
            'Bauchi',
            'Bayelsa',
            'Benue',
            'Borno',
            'Cross River',
            'Delta',
            'Ebonyi',
            'Edo',
            'Ekiti',
            'Enugu',
            'Gombe',
            'Imo',
            'Jigawa',
            'Kaduna',
            'Kano',
            'Katsina',
            'Kebbi',
            'Kogi',
            'Kwara',
            'Lagos',
            'Nasarawa',
            'Niger',
            'Ogun',
            'Ondo',
            'Osun',
            'Oyo',
            'Pleateau',
            'Rivers',
            'Sokoto',
            'Taraba',
            'Yobe',
            'Zamfara',
        ];
        // fees
        $classes = ['Nursery 1', 'Nursery 2', 'Reception', 'Primary 1', 'Primary 2', 'Primary 3', 'JSS 1', 'JSS 2'];
        $first = ['360000', '375000', '390000', '475000', '500000', '500000', '600000', '600000'];
        $relationships = ['Select Relation','Father', 'Mother', 'Guardian Male', 'Guardian Female'];
        $third = [''];
        $years = [''];
        $fees = [
            [360000, 280000, 280000, 920000],
            [375000, 295000, 295000, 965000],
            [390000, 315000, 315000, 1020000],
            [475000, 380000, 380000, 1235000],
            [500000, 400000, 400000, 1300000],
            [500000, 400000, 400000, 1300000],
            [600000, 470000, 470000, 1540000],
            [600000, 470000, 470000, 1540000],
        ];
        return view('admission', compact(['states', 'fees', 'classes', 'years', 'relationships']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'parentname' => 'required',
            'relationship' => ['required', 'notIn:Select Relation'],
            'occupation' => 'required',
            'address' => 'required',
            'phone' => ['required', 'digits:10'],
            'email' => ['required', 'email'],
            'state' => ['required', 'notIn:state'],
            'school' => 'required',
            'studentname' => 'required',
            'dob' => ['required', 'date', 'before:today'],
            'gender' => 'required',
            'class' => ['required', 'notIn:student'],
            // 'exam' => 'required',
            'previousschool' => 'nullable',
            'previousclass' => 'nullable',
        ]);

        Admission::create($data);

        Mail::to(env('MAIL_USERNAME'))->send(new AdmissionMail($data));

        return redirect('/payment');
        //return redirect('https://paystack.com/buy/acce-abuja-form');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function show(Admission $admission)
    {
        //
        return view('');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function edit(Admission $admission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admission $admission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admission $admission)
    {
        //
    }
}
