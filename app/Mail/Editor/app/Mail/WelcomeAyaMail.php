<?php

namespace App\Mail\Editor\app\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeAyaMail extends Mailable
{
    use Queueable, SerializesModels;

    public $username = 'Aya omar';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function build()
    {
        return $this->view('maileclipse::templates.aya')->text('maileclipse::templates.aya_plain_text');
    }
}
