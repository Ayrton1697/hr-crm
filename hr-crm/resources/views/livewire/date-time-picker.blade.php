<div class="p-10 p-20 flex flex-column">

    <x-datetime-picker
        label="Appointment Date"
        placeholder="{{$label}}"
        wire:model.defer="DateTimePicker"
        interval="30"
        min-time="09:00"
        without-time
        without-timezone
        selectedDate
    />


    <div class="p-10 self-end justify-self-end">
        <x-button wire:click="getAvailableDates" class="ml-3 text-white bg-primary-100">
                Submit
        </x-button>
    </div>
    
<!-- 
    <button wire:loading.attr="disabled" wire:loading.class="!cursor-wait" type="button" class="outline-none inline-flex justify-center items-center group transition-all ease-in duration-150 focus:ring-2 focus:ring-offset-2 hover:shadow-sm disabled:opacity-80 disabled:cursor-not-allowed rounded gap-x-2 text-sm px-4 py-2     ring-primary-500 text-white bg-primary-500 hover:bg-primary-600 hover:ring-primary-600
    dark:ring-offset-slate-800 dark:bg-primary-700 dark:ring-primary-700
    dark:hover:bg-primary-600 dark:hover:ring-primary-600" onclick="$openModal('simpleModal')">
    Open
    </button> -->

<x-modal wire:model.defer="simpleModal">
    <x-card title="Consent Terms">
        <p class="text-gray-600">
           Confirmar reserva de turno el día {{$date}} a las {{$selectedTime}}?
        </p>
 
        <x-slot name="footer">
            <div class="flex justify-end gap-x-4">
                <x-button flat label="Cancel" x-on:click="close" />
                <x-button primary label="I Agree" />
            </div>
        </x-slot>
    </x-card>
</x-modal>


    
    <div class="p-10 text-black">
        @foreach($availableDates as $availableDate)

            @if($availableDate['date'] == $date)
                @foreach($availableDate['times'] as $availableTime)
                    <x-button class="ml-3 text-white bg-primary-100" id="{{$availableTime}}" wire:loading.attr="disabled" wire:loading.class="!cursor-wait" wire:click="selectTime('{{$availableTime}}')"   onclick="$openModal('simpleModal')" >
                            {{$availableTime}}
                    </x-button>
                @endforeach
            @endif
        @endforeach
    </div>

  
</div>