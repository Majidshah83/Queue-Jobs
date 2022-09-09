<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $emailData;
   public function __construct($emailData)
    {
        $this->emailData = $emailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from('shahmajid508@gmail.com')
        ->replyTo('shahmajid508@gmail.com')
        ->subject($this->emailData['subject'])
        ->attach(public_path('abc.pdf'))
        ->attach(public_path('image.jpg'))
        ->text('templateEmail');
    }

}