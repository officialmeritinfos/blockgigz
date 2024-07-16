<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;

class SendAdminTwoFactorMail extends Notification
{
    use Queueable;
    public $admin;
    /**
     * Create a new notification instance.
     */
    public function __construct($admin)
    {
        $this->admin = $admin;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $url =  URL::temporarySignedRoute(
            'login.authenticate', now()->addMinutes(30), ['email' => $this->admin->email]
        );
        return (new MailMessage)
                    ->subject('Login Authorization')
                    ->line('There is a login request on your account. Use the link below to authorize this login request.')
                    ->action('Authorize Login', $url)
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
