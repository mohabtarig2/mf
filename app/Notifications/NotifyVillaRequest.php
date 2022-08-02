<?php

namespace App\Notifications;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotifyVillaRequest extends Notification implements ShouldBroadcast
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
   
   public $user ;
   public $request ;
   public function __construct($request, User $user)
   {
       $this->user = $user;
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
       return ['broadcast','database','mail'];
   }

   public function toMail($notifiable)
   {
       return (new MailMessage)

                   ->line('Villa Design')
                   ->line($this->user->name.' Request a new design ')
                   ->action('View Request', url('/#/dashboard/request/details/'.$this->request->id))
                   ->line('Thank you for using our application!');
   }

   /**
    * Get the mail representation of the notification.
    *
    * @param  mixed  $notifiable
    * @return \Illuminate\Notifications\Messages\MailMessage
    */
   public function toArray($notifiable)
   {


       return [
            'New_Request_villa'=>$this->request,
           'user'=>$this->user,


       ];
    
   }
   public function ToBroadcast($notifiable){

       return new BroadcastMessage([
           'data'=>[

               'New_Request_villa'=>$this->request,
                'user'=>$this->user,

           ]
       ]);
   }
}
