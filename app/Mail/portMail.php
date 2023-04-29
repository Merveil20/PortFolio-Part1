<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class portMail extends Mailable
{
    use Queueable, SerializesModels;

    //public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('test@gmail.com')
                    ->subject('mon persol')
                    ->view('emails.test');
    }
}
