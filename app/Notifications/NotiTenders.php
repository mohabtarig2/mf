<?php

namespace App\Notifications;

use App\Tconsulte;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\BroadcastMessage;


class NotiTenders extends Notification implements ShouldBroadcast
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public $Tender_owner;  public $tender;
    public function __construct(Tconsulte $tender )
    {

        $this->Tender_owner = $tender->user;
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
                    ->line($this->tender->note)
                    ->line('You have a new engineering consultancy tender, under review')
                    ->action('View Tender', url('/#/admin/Conslute-Tenders/'.$this->tender->id))
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
            'tender'=>$this->tender
        ];
    }
    public function ToBroadcast($notifiable){   

        return new BroadcastMessage([
            'data'=>[
                'Tender_owner'=>$this->Tender_owner,
                'tender'=>$this->tender
            ]
        ]);
    }
}
