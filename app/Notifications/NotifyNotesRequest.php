<?php

namespace App\Notifications;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotifyNotesRequest extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $user;
    public $request;
    public $owner;

    
    public function __construct(User $user , $owner,$request)
    {
        $this->user = $user;
        $this->owner = $owner;
        $this->request = $request;
    }


    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail' ,'broadcast','database'];
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
        ->line($this->user->name.' Added Long description To Project')
        ->action('View Request', url('/#/request/consulting/'.$this->request->request_id))
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
            'eng'=>$this->user,
                'user'=>$this->owner,
                'ConsultantNotesTender'=>$this->request
        ];
    }
    public function ToBroadcast($notifiable){

        return new BroadcastMessage([
            'data'=>[
                'eng'=>$this->user,
                'user'=>$this->owner,
                'ConsultantNotesTender'=>$this->request
            ]
        ]);
    }

}
