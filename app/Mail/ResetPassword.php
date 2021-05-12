<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use App\thuvien_xuly\Strings;

class ResetPassword extends Mailable
{
    use Queueable, SerializesModels;

    public $info_send;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($info_send)
    {
        $this->info_send = $info_send;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.reset_pass')
                    ->with([
                        'info_send' => $this->info_send
                    ]);
    }
}
