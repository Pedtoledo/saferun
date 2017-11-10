<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notifiable;

class solitacoes extends Notification
{
    use Queueable,Notifiable;

protected $solicitar;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($solicitar)
    {
        $this->solicitar = $solicitar;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }


    public function toDatabase($notifiable)
    {
        return [
            'solicitar' => $this->solicitar,
            'user'  => auth()->user()
        ];
    }



    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
