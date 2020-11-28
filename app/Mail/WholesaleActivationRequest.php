<?php

namespace App\Mail;

use App\Wholesale;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WholesaleActivationRequest extends Mailable
{
    use Queueable, SerializesModels;

    public $wholesale;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Wholesale $wholesale)
    {
        $this->wholesale = $wholesale;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.admin.wholesale-activation');
    }
}
