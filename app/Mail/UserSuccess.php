<?php

namespace App\Mail;

use App\Models\Process;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserSuccess extends Mailable
{
    use Queueable, SerializesModels;

    public Process $process;
    public $from;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Process $process)
    {
        $this->process = $process;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("pay@ankamuh.com", "Online Tahsilat Sistemi")
            ->to($this->process->email)
            ->subject("Ödemeniz İçin Teşekkürler")
            ->view('mail.user_success');
    }
}
