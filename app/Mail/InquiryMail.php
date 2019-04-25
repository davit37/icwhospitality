<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $inquiry;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($name,$email,$inquiry)
    {
        $this->name = $name;
        $this->email = $email;
        $this->inquiry = $inquiry;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.inquiry');
    }
}
