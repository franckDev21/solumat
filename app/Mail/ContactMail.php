<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;


    public $data;
    public $type;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $type = 'contact')
    {
        $this->data = $data;
        $this->type = $type; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact');
    }
}
