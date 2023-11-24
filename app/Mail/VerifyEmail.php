<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $verificationLink;
    public $userName;

    /**
     * Create a new message instance.
     */
    public function __construct($verificationLink, $userName)
    {
        $this->verificationLink = $verificationLink;
        $this->userName = $userName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Verify Email')
                    ->view('auth.emails.verify') // Attaching the view file for email content
                    ->with([
                        'verificationLink' => $this->verificationLink,
                        'userName' => $this->userName // Passing the user's name to the view
                    ]);
    }
}
