<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AddPatientMail extends Mailable
{
    use Queueable, SerializesModels;

    public $add;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($add)
    {
        $this->add = $add;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('RHC Appointment')
                    ->view('emails.addpatient');
    }
}
 