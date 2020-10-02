<?php

namespace App\Mail;

use App\UserRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserRequestNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $userRequest;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(UserRequest $userRequest)
    {
        $this->userRequest = $userRequest;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('admin@admin.com')
                    ->view('emails.user_request_mail');
    }
}
