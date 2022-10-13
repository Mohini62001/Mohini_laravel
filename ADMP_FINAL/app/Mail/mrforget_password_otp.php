<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class mrforget_password_otp extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data=$data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject='Forgrt OTP';
        $name="Doccure";
        return $this->view('mr.mrforget_otp_mail')
        ->subject($subject)
        ->with(['name'=>$name,'mrforgot_pass_otp'=>$this->data['mrforgot_pass_otp'],'body'=>$this->data['body']]);
    }
}
