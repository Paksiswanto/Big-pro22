<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InvitationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $invitationLink;

    public function __construct($invitationLink)
    {
        $this->invitationLink = $invitationLink;
    }

    public function build()
    {
        return $this->view('emails.invitation')
                    ->subject('Undangan untuk bergabung');
    }
}
