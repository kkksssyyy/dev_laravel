<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    public function __construct()
    {
        $this->contact = $contact;
    }

    public function build()
    {
        return $this->subject('[問い合わせ]'.$this->contact['subject'])
		->view('contact.mail');
    }
}
