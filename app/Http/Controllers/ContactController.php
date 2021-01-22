<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'name' => 'required',
            'email' => ['required', 'email'],
            'phone' => ['required', 'digits:10'],
            'subject' => 'required',
            'message' => ['required', 'min:7', 'max:2000'],
        ]);

        // $data = array(
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'subject' => $request->subject,
        //     'message' => $request->message,
        // );
        // save into database
        Contact::create($data);

        // send emails
        Mail::to(env('MAIL_USERNAME'))->send(new ContactMail($data));

        return redirect()->route('contact')->with('success', 'Message has been sent. Thank You for contacting us.');
     }
    public function storeMAil(Request $request)
    {
        //

        $data = request()->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'phone' => ['required', 'digits:10'],
            'subject' => 'required',
            'message' => ['required', 'min:7', 'max:2000'],
        ]);

        // send the message to emails

        // Load Composer's autoloader
        //require 'vendor/autoload.php';
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
            $mail->isSMTP(); // Send using SMTP
            $mail->Host = env('MAIL_HOST'); // Set the SMTP server to send through
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = env('MAIL_USERNAME'); // SMTP username
            $mail->Password = env('MAIL_PASSWORD'); // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption for PHPMailer::ENCRYPTION_STARTTLS; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port = env('MAIL_PORT'); // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom($data['email'], 'ACCE-ABUJA');
            $mail->addAddress('netbite62@gmail.com', 'ACCE Info'); // Add a recipient
            //$mail->addAddress('bowofadeoyerinde@gmail.com', $data['name']); // Name is optional
            //$mail->addReplyTo($data['email'], $data['name']);
            //$mail->addCC($data['email']);
            //$mail->addBCC('it@acce-abuja.com.ng');

            //message to be delivered

            // Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = $data['subject'];
            $mail->Body = $data['message'].' <br>'. '<h5>Name</h5>:' . $data['name'].' <br>'. '<h5>Phone</h5>:' . 0 . $data['phone'] .' <br>'. '<h5>Email</h5>'. $data['email'];
            $mail->AltBody = 0 . $data['phone'];

            Contact::create($data);
            $mail->send();
            // save into the database
            return redirect()->route('contact')->with('success', 'Message has been sent. Thank You for contacting us.');
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        //return redirect()->route('contact')->with('success', 'Message has been sent. Thank You for contacting us.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
