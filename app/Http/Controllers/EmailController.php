<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    //

public function contactMail()
{
    return new ContactMail();
}
}
