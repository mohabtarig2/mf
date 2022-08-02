<?php

namespace App\Notifications;

use App\Tconsulte;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotifyRejectConsulte extends Notification implements ShouldBroadcast
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public $user;  public $tender;

    public function __construct(User $user,Tconsulte $tender)
    {

        $this->user = $tender->user;
        $this->rejected_at = $tender->created_at;
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
        return ['database','broadcast','mail'];
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
                    ->line('Your Tender Has Been rejected')
                    ->action('View Tender', url('/#/Projects/'.$this->tender->id))
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
             'user'=>$this->user,
            'Tender_consulte_reject'=>$this->tender,
            'rejected_at'=>$this->rejected_at,



        ];
    }
    public function ToBroadcast($notifiable){

        return new BroadcastMessage([
            'data'=>[
                'user'=>$this->user,
            'Tender_consulte_reject'=>$this->tender,
            'rejected_at'=>$this->rejected_at,
            ]
        ]);
    }
}
