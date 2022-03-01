<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Http\Controllers\TelegramController;
use NotificationChannels\Telegram\TelegramMessage;
use NotificationChannels\Telegram\TelegramChannel;

// use Illuminate\Support\Facades\Notification;
use App\Models\Settings;

class ExampleNotification extends Notification
{
    use Queueable;

    private $massege;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(string $massege)
        // public function __construct()
    {
        // dd($massege);
        $this->massege = $massege;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        // return ["telegram"];
        return [TelegramChannel::class];
    }

    function markdown_escape($text) {
        return str_replace([
            '\\', '-', '#', '*', '+', '`', '.', '[', ']', '(', ')', '!', '&', '<', '>', '_', '{', '}', ], [
            '\\\\', '\-', '\#', '\*', '\+', '\`', '\.', '\[', '\]', '\(', '\)', '\!', '\&', '\<', '\>', '\_', '\{', '\}',
        ], $text);
    }

    public function toTelegram($notifiable)
    {

        $d = json_decode($this->massege);

        $text = $this->markdown_escape("Клиент оставил своих контактов\nИмя: $d->name\nТелефон номер: $d->phone\nЭ-почта: $d->email\nТип услуги: $d->package\nТекст: $d->message");

        return TelegramMessage::create()
            ->to(env('TELEGRAM_USER_ID'))
            ->content($text);
    }
}
