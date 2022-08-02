<?php

namespace App\Notifications;

use App\Tconsulte;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\BroadcastMessage;


class notifyAcceptTenders extends Notification  implements ShouldBroadcast
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $Tender_owner;  public $TenderAccepted;
    public function __construct(Tconsulte $TenderAccepted )
    {

        $this->Tender_owner = $TenderAccepted->user;
        $this->TenderAccepted = $TenderAccepted;
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
                    ->line('Your bid has been accepted. Now you can receive the offers of engineering consulting companies')
                    ->action('View Project', url('/#/Projects/'.$this->TenderAccepted->id))
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
            'Tender_owner'=>$this->Tender_owner,
            'TenderAccepted'=>$this->TenderAccepted
        ];
    }
    public function ToBroadcast($notifiable){

        return new BroadcastMessage([
            'data'=>[
                'Tender_owner'=>$this->Tender_owner,
                'TenderAccepted'=>$this->TenderAccepted
            ]
        ]);
    }
}
