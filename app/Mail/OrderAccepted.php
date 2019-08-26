<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderAccepted extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public $user;
    public $date;
    public $amount;

    /**
     * Create a new message instance.
     *
     * @param array $data
     * @param User $user
     * @param $date
     * @param $amount
     */
    public function __construct(array $data, User $user, $date, $amount)
    {
        $this->data = $data;
        $this->user = $user;
        $this->date = $date;
        $this->amount = $amount;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.email_order_accepted');
    }
}
