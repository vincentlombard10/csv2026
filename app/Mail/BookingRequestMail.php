<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BookingRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $pdfContent;
    /**
     * Create a new message instance.
     */
    public function __construct(public array $data, string $pdfContent)
    {
        $this->pdfContent = $pdfContent;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nouvelle demande de réservation de table',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.booking-request',
            with: [
                'firstname' => $this->data['firstname'],
                'lastname' => $this->data['lastname'],
                'email' => $this->data['email'],
                'phone' => $this->data['phone'],
                'birthdate' => $this->data['birthdate'],
                'room' => $this->data['room'],
                'date' => $this->data['date'],
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromData(
                fn () => $this->pdfContent, // PDF content in memory
                'booking-sheet.pdf'         // filename for recipient
            )->withMime('application/pdf'),
        ];
    }
}
