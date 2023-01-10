<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DelartoCustomerNotification extends Notification
{
    use Queueable;
    private $sender_id ;
    private $requst ;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($sender_id , $requst)
    {
        $this->sender_id = $sender_id ;
        $this->requst = $requst ;
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

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'sender_id'=>$this->sender_id ,
            'notification'=>$this->requst ,
            'reciver_id'=>auth()->user()->id,
        ];
    }
}
