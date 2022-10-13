<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class aforget_password_otp extends Mailable
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
        return $this->view('admin.aforget_otp_mail')
        ->subject($subject)
        ->with(['name'=>$name,'aforgot_pass_otp'=>$this->data['aforgot_pass_otp'],'body'=>$this->data['body']]);
    }
}
