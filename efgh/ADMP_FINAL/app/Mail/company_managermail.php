<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class company_managermail extends Mailable
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
        $subject='Please Save Your Password';
        $name="Doccure";

        return $this->view('company.manager_mail')
        ->subject($subject)
        ->with(['first_name'=>$this->data['first_name'],'last_name'=>$this->data['last_name'],'email'=>$this->data['email'],
        'dpass'=>$this->data['dpass'],'body'=>$this->data['body']]);
    }
}
