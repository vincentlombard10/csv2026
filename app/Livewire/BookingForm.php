<?php

namespace App\Livewire;

use App\Jobs\RegisterBookingJob;
use App\Mail\TestMail;
use App\Services\BookingApplicationService;
use App\Services\PdfService;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Mpdf\Mpdf;
use Mpdf\MpdfException;

class BookingForm extends Component
{
    public bool $open = false;


    public string|null $type = 'Anniversaire';
    public string $firstname = 'Vincent';
    public string $lastname = 'Lombard';
    public string $birthdate = '1986-02-09';

    public string $email = 'vincent.lombard@me.com';
    public string $phone = '0607229279';

    public string $room = 'Grand Club';

    public string $date = '2026-11-10';
    public int $attendees = 8;
    public string $attendee1_fullname = '';
    public string $attendee1_email = '';
    public string $attendee1_phone = '';
    public string $attendee1_birthdate = '';
    public string $attendee2_fullname = '';
    public string $attendee2_email = '';
    public string $attendee2_phone = '';
    public string $attendee2_birthdate = '';
    public string $attendee3_fullname = '';
    public string $attendee3_email = '';
    public string $attendee3_phone = '';
    public string $attendee3_birthdate = '';
    public string $attendee4_fullname = '';
    public string $attendee4_email = '';
    public string $attendee4_phone = '';
    public string $attendee4_birthdate = '';
    public string $attendee5_fullname = '';
    public string $attendee5_email = '';
    public string $attendee5_phone = '';
    public string $attendee5_birthdate = '';

    protected function rules(): array {
        return [
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'birthdate' => 'required|date',
            'email' => 'required|email',
            'phone' => 'required',
            'room' => 'required',
            'date' => 'required',
            'attendees' => 'required|numeric|min:4|max:40',
            'attendee1_birthdate' => 'required_with:attendee1_fullname|date',
            'attendee2_birthdate' => 'required_with:attendee2_fullname|date',
            'attendee3_birthdate' => 'required_with:attendee3_fullname|date',
            'attendee4_birthdate' => 'required_with:attendee4_fullname|date',
            'attendee5_birthdate' => 'required_with:attendee5_fullname|date',
        ];
    }

    protected function messages(): array {
        return [
            'firstname.required' => 'Veuillez renseigner un prénom.',
            'firstname.min' => 'Le prénom doit compoter au moins 3 caracteres.',
            'lastname.required' => 'Veuillez renseigner un nom.',
            'lastname.min' => 'Le nom doit comporter au moins 3 caracteres.',
            'birthdate.required' => 'Veuillez renseigner une date de naissance.',
            'email.required' => 'Veuillez renseigner une adresse e-mail.',
            'email.email' => 'Veuillez renseigner une adresse e-mail valide.',
            'phone.required' => 'Un numéro de téléphone est obligatoire.',
            'room.required' => 'Veuillez indiquer une salle souhaitée.',
            'date.required' => 'Veuillez renseigner une date souhaitée.',
            'attendees.required' => 'Un nombre de personnes doit être renseigné.',
            'attendees.min' => 'La réservation doit être pour 4 personnes minimum.',
            'attendees.max' => 'La réservation ne peux pas excéder 40 personnes.',
        ];
    }

    /**
     * @throws MpdfException
     * @throws \Throwable
     */
    public function submit(): void
    {
        try {
            $data = [
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'birthdate' => $this->birthdate,
                'email' => $this->email,
                'phone' => $this->phone,
                'room' => $this->room,
                'attendees' => $this->attendees,
                'type' => $this->type
            ];
            $bookingApplicationService = new BookingApplicationService;
            $bookingApplication = $bookingApplicationService->create($data);

            RegisterBookingJob::dispatch($this->all());
            $message = sprintf("Votre demande de réservation de table a bien été envoyée. Une réponse vous sera apportée dans les meilleurs délais.");
            $this->dispatch('toast', [
                'toast' => [
                    'type' => 'success',
                    'message' => $message,
                ]
            ]);
        } catch (\Throwable $th) {
            report($th);
        }
        $this->open = false;
        $this->reset(['firstname', 'lastname', 'email', 'phone', 'room', 'date', 'birthdate']);
    }

    public function render()
    {
        return view('livewire.booking-form');
    }
}
