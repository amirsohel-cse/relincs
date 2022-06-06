<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EvryThingNotification extends Notification
{
    use Queueable;

    protected  $everyThing;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($everyThing)
    {
        // dd($everyThing);
        $this->everyThing = $everyThing;
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
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
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
            "title" => $notifiable['title'],
            "image_profile" => $notifiable['image_profile'],
            "username" => $notifiable['username'],
            "message" => $this->everyThing['message'],
            "title" => $this->everyThing['title'],
            "type" => $this->everyThing['type'],
            "from_id" => $this->everyThing['from_id'],
        ];
    }
}
