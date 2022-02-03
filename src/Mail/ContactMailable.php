<?php

namespace Alidev\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;
    protected $message;
    protected $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message,$name)
    {
        $this->message=$message;
        $this->name=$name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact::email')->with(['message'=>$this->message,'name'=>$this->name]);
    }
}
