<?php

namespace App\Models;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;

class ResetPassword extends ResetPasswordNotification
{

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject(trans('app.reset_password'))
            ->line(trans('app.reset_password_received_the_letter'))
            ->action(trans('app.reset_password'), url('password/reset', $this->token))
            ->line(trans('app.reset_password_not_send_request'));
    }

}
