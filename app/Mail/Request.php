<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Request extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $phone;
    public $email;

    /**
     * Create a new message instance.
     *
     * @param $name
     * @param $phone
     * @param $email
     */
    public function __construct($name, $phone, $email)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@holstor.ru')
            ->text('email.request');
    }
}
