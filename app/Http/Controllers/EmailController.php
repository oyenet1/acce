<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    //Pad

public function contactMail()
{
    return new ContactMail();
}
}
