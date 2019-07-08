<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 08.07.2019
 * Time: 17:16
 */

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 08.07.2019
 * Time: 16:11
 */

class ConfirmationEmailSuccess extends Mailable{
    use Queueable, SerializesModels;
    protected $data;
    /**
     * Create a new message instance.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //Markdown
        return $this->markdown('mail.email_confirmation_success')->
        with([
            "name" => $this->data['name']
        ]);
    }
}

