<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $subject;
    public $message;
    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $message,$email)
    {
        //
        $this->subject = $subject;
        $this->mesessage = $message;
        $this->email = $email;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       
        // return $this->from('example@example.com');
        return $this->view('contact.mail',['m'=>$this->mesessage,'e'=>$this->email,'s'=>$this->subject]);
    }
}