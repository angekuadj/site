<?php

namespace App\Notifications;

use App\Models\Cour;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CourNotification extends Notification
{
    use Queueable;

    public $cour;
    public $create_cour;
    public $title;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($cour_id, $create_cour)
    {
        $this->cour = $cour_id;
        $this->create_cour =$create_cour;
        $this->title;
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
            'cour_id' =>$this->cour->id,
            'create_cour' =>$this->create_cour,
        ];
    }
}
