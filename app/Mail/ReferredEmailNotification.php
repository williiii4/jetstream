<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
//use Illuminate\Support\Facades\Auth;

class ReferredEmailNotification extends Mailable
{
    use Queueable, SerializesModels;

    //public $user;
    public $name;
    public $referred_token;
    public $email;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        //$this->user = Auth::user(); 
        
        $this->name = auth()->user()->name;
        $this->referred_token = auth()->user()->referred_token;
        $this->email = auth()->user()->email;
        
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $subject = __('dashboard.msg_subject_refferred');
        return new Envelope(
            from: new Address(auth()->user()->email, auth()->user()->name),
            // subject: 'Invitación a registro referido',// __('messages.welcome')
            subject: $subject,
        );
        
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.referred-invitation',            
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
