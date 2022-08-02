<?php

namespace App\Notifications;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class notifyConfirRequestmOfferConsturction extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $user ; public $request; public $tender;
    public function __construct(User $user , $request, $tender)
    {
        $this->user = $user;
        $this->request = $request;
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
                    ->line('Construction Tender')
                    ->line($this->user->name.' Chose your offer ')
                    ->action('View Project', url('/#/tenders/construction/'.$this->tender->tender_id))
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
             'user_owner_construction_request'=>$this->user,
            'Offer_Construction_Confirmed'=>$this->request,
            'tender_confrimed_offer_construction'=>$this->tender,




        ];
    }
    public function ToBroadcast($notifiable){

        return new BroadcastMessage([
            'data'=>[

                'user_owner_construction_request'=>$this->user,
                'Offer_Construction_Confirmed'=>$this->request,
                'tender_confrimed_offer_construction'=>$this->tender,
            ]
        ]);
    }
}
