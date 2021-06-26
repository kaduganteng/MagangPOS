<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotifikasiAcc extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    protected $pdf;
    protected $report_name;
    protected $tanggal_pengembalian;
    public function __construct($pdf, $report_name, $tanggal_pengembalian)

    {
        $this->pdf = $pdf;
        $this->report_name = $report_name;
        $this->tanggal_pengembalian = $tanggal_pengembalian;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
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
            ->line('Peminjaman anda sudah diacc,harap simpan file pdf ini sebagai bukti peminjaman.')
            ->line('Batas peminjaman tanggal ' . $this->tanggal_pengembalian)
            ->attachData($this->pdf->output(), $this->report_name . ".pdf")
            ->line('Terima Kasih');
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
            //
        ];
    }
}
