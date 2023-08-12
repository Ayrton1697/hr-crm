<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Filament\Pages\Actions\Action;

class DateTimePicker extends Component
{

    public $availableDates = [];
    public $selectedDate = "";
    public $selectedTime = "";
    public $disabledDates = ['2023-14-08', '2023-08-15','2020-08-16'];
    public $date = '2023-08-10';
    public $maxTime = '09:30';
    public $label = 'testing';
    public $test = true;

    public function mount()
    {
       $this->availableDates = [
        [
        'date' => '2023-08-14' ,
        'times' => [
            '9:00',
            '10:30',
            '14:30',
            ]
        ],

        [
        'date' => '2023-08-15' ,
        'times' => [
            '9:30',
            '12:30',
            '15:00',
            '16:00',
            '17:00',
            ]
        ]
            ];

    }


    public function getActions()
    {
        return [
            Action::make('settings')->action('openSettingsModal')->requiresConfirmation(),
        ];
    }
     
    public function openSettingsModal()
    {
        return "hola";
    }


    public function getAvailableDates($date){
        $this->date = $date;
        return $date;
        $this->test = !$this->test;
    }

    public function selectTime($time){
        $this->selectedTime = $time;
    }

    public function render()
    {
        return view('livewire.date-time-picker');
    }


}
