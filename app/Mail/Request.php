<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Request extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $name;
    public $phone;
    public $email;
    public $ip;
    public $city;

    /**
     * Create a new message instance.
     *
     * @param $subject
     * @param $name
     * @param $phone
     * @param $email
     * @param $ip
     * @param $city
     */
    public function __construct($subject, $name, $phone, $email, $ip, $city)
    {
        $this->subject = $subject;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->ip = $ip;
        $this->city = $city;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_USERNAME'))
            ->subject($this->subject)
            ->replyTo($this->email, $this->name)
            ->text('email.request');
    }
}
