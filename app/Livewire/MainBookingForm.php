<?php

namespace App\Livewire;

use Livewire\Component;

class MainBookingForm extends Component
{
    public string $type = '';

    public function render()
    {
        return view('livewire.main-booking-form');
    }

    public function updatedType($type): void
    {
        $this->type = $type;
    }
}
