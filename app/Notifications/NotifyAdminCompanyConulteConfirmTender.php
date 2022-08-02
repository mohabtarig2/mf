<?php

namespace App\Notifications;

use App\request_tender;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotifyAdminCompanyConulteConfirmTender extends Notification implements ShouldBroadcast
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $user;  public $request;

    public function __construct(User $user,request_tender $request)
    {

        $this->user = $user;
        $this->added_at = $request->created_at;
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
                    ->line('Completion request to continue the project')
                    ->action('View Project', url('/#/admin/Conslute-Tenders/'.$this->request->tender_id))
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
             'company'=>$this->user,
            'request_tender_consulte'=>$this->request,
            'added_at'=>$this->added_at,



        ];
    }
    public function ToBroadcast($notifiable){

        return new BroadcastMessage([
            'data'=>[
                'company'=>$this->user,
                'request_tender_consulte'=>$this->request,
                'added_at'=>$this->added_at,
            ]
        ]);
    }
}
