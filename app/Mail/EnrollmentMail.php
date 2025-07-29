<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class EnrollmentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $application;

    /**
     * Accept $user and $application when creating this mailable
     */
    public function __construct($user, $application)
    {
        $this->user = $user;
        $this->application = $application;
    }

    /**
     * Define the email subject
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Enrollment Mail',
        );
    }

    /**
     * Pass the data to your email Blade view
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.Tousernotify',
            with: [
                'user' => $this->user,
                'application' => $this->application,
            ]
        );
    }

    /**
     * Attachments (if needed)
     */
    public function attachments(): array
    {
        return [];
    }
}
