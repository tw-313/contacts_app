<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMail extends Mailable
{
    /**
     * @var Component メール構成情報
     */
    private Component $component;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Component $component)
    {
        $this->component = $component;
    }

    public function sendOne(string $toEmail)
    {
        Mail::raw(
            $this->component->text,
            function ($message) use ($toEmail) {
                $message
                    ->replyTo($this->component->replyToEmail, $this->component->replyToName)
                    ->to($toEmail)
                    ->from($this->component->fromEmail, $this->component->fromName)
                    ->subject($this->subject);
            }
        );
    }

}
