<?php

namespace App\Notifications;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotiftConsultantContract extends Notification implements ShouldBroadcast
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $user;  public $contract; public $eng;
    public function __construct($eng, User $user, $contract )
    {

        $this->eng = $eng;
        $this->user = $user;
        $this->contract = $contract;
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
                    ->line($this->eng->name.' uploaded the engineering consultancy contract')
                    ->action('View Request', url('/#/request/consulting/'.$this->contract->request_id))
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
            'eng'=>$this->eng,
            'user'=>$this->user,
            'ConsultantContract'=>$this->contract
        ];
    }
    public function ToBroadcast($notifiable){

        return new BroadcastMessage([
            'data'=>[
                'eng'=>$this->eng,
                'user'=>$this->user,
                'ConsultantContract'=>$this->contract
            ]
        ]);
    }

}
