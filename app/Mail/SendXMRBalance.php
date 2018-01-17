<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class SendXMRBalance extends Mailable
{
    use Queueable, SerializesModels;

    public $user, $amount;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $amount)
    {
        $this->user = $user;
        $this->amount = $amount;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.user.xmrbalance')->subject("Withdrawl from user");
    }
}
