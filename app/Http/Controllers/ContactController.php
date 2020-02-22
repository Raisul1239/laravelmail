<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;
use App\Mail\SendMail;

class ContactController extends Controller
{
    //

    public function index()
    {
    }
    public function send(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'

        ]);
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;

        Mail::to("raisul35-1468@diu.edu.bd")
        ->send(new SendMail($subject, $message,$email));
        return back();
       
    }
    public function show()
    {
        $team_members = DB::table('contact')->get();
        // return view('about', ['data' => $team_members]);
        return view('contact.contact', ['data' => $team_members]);
    }
}