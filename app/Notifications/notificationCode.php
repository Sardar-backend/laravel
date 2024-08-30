<?php

namespace App\Notifications;
// require __DIR__ . '/vendor/autoload.php';
use App\Notifications\channels\gasedakChannel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class notificationCode extends Notification
{
    use Queueable;
    public $code;
    public $phone;
    /**
     * Create a new notification instance.
     */
    public function __construct($code,$phone)
    {


        $this->code = $code;
        $this->phone = $phone;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */


    public function via(object $notifiable): array
    {

        return [gasedakChannel::class];
    }

    public function toghasedaksms ($notifiable){

        return [

            'text' => "کد احراز هویت " . $this->code . " \nوبسایت  روبیک مارکت \n لغو 11" ,
            'phone'=>$this->phone
        ];
    }
    // /**
    //  * Get the mail representation of the notification.
    //  */
    // public function toMail(object $notifiable): MailMessage
    // {
    //     return (new MailMessage)
    //                 ->line('The introduction to the notification.')
    //                 ->action('Notification Action', url('/'))
    //                 ->line('Thank you for using our application!');


    // }

    // /**
    //  * Get the array representation of the notification.
    //  *
    //  * @return array<string, mixed>
    //  */
    // public function toArray(object $notifiable): array
    // {
    //     return [
    //         //
    //     ];
    // }
}
