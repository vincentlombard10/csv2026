<?php

namespace App\Jobs;

use App\Mail\BookingRequestMail;
use App\Mail\TestMail;
use App\Services\PdfService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class RegisterBookingJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public string $pdf;

    public function __construct(public $data)
    {
    }

    public function handle(): void
    {
        Log::info('RegisterBookingJob::handle', ['data' => $this->data]);

        $pdfContent = PdfService::make('pdf.booking-sheet', ['data' => $this->data])
            ->Output('', 'S');
        $path = storage_path(sprintf('app/pdfs/Reservation_%s.pdf', now()->format('Ymd_hi')));
        $pdf = PdfService::make('pdf.booking-sheet',  ['data' => $this->data])
            ->Output($path, 'F');

        try {
            Mail::mailer('mailjet')
                ->to('vincent.lombard@me.com')
                ->send(new BookingRequestMail($this->data, $pdfContent));

        } catch (\Exception $exception) {
            Log::error('Send mail Error', ['exception' => $exception->getMessage()]);
        }
    }
}
