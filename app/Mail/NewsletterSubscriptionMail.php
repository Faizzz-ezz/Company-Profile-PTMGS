<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewsletterSubscriptionMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Pendaftar Newsletter Baru',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.newsletter-subscription',
        );
    }
}
