<?php

namespace App\Mail;

use App\Models\Aduan;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TicketConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public Aduan $aduan;

    /**
     * Create a new message instance.
     */
    public function __construct( Aduan $aduan)
    {
        $this->aduan = $aduan; // Assign objek Aduan ke properti
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
           subject: 'Konfirmasi Tiket Aduan Anda: ' . $this->aduan->no_tiket, // Subjek email
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.ticket-confirmation',
            with: [
                'aduan' => $this->aduan, // Kirim objek Aduan ke template
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
