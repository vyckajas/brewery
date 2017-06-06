<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Reservation extends Mailable
{
    use Queueable, SerializesModels;

    public $ivykis;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ivykis)
    {
        $this->ivykis = $ivykis;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.reservation')->with([
            'reservationName' => $this->ivykis->name,
            'page_title' => $this->ivykis->title,
            'startTime' => $this->ivykis->start_time,
            'endTime' => $this->ivykis->end_time,
        ]);
    }
}
