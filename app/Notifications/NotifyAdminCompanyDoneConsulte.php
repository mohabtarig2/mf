<?php

namespace App\Notifications;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotifyAdminCompanyDoneConsulte extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $user ; public $tender;
    public function __construct(User $user , $tender)
    {
        $this->user = $user;
        $this->tender = $tender;
    }


    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['broadcast','database','mail'];
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
        ->line('Engineering Consultancy Tender')
        ->line('The owner has confirmed the request to complete the project')
        ->line('Please Prepare The consultant contract')
        ->action('View Request', url('/#/request/consulting/'.$this->tender->id))
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
             'CompnyCompleteTheRequest'=>$this->user,
            'TenderConsulteComplete'=>$this->tender,

        ];
    }
    public function ToBroadcast($notifiable){

        return new BroadcastMessage([
            'data'=>[

                'CompnyCompleteTheRequest'=>$this->user,
                'TenderConsulteComplete'=>$this->tender,
            ]
        ]);
    }
}
