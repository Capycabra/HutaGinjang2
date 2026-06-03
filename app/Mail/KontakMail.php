<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class KontakMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public array $data
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '[Kontak Website] ' . $this->data['subjek'],
            from: $this->data['email'],
            replyTo: $this->data['email'],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.kontak',
            with: [
                'nama' => $this->data['nama'],
                'email' => $this->data['email'],
                'telepon' => $this->data['telepon'] ?? '-',
                'subjek' => $this->data['subjek'],
                'pesan' => $this->data['pesan'],
            ],
        );
    }
}
