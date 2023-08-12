<?php

namespace App\Filament\Resources\JobPostingResource\Pages;

use App\Filament\Resources\JobPostingResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Pages\Actions\Action;

class CreateJobPosting extends CreateRecord
{
    protected static string $resource = JobPostingResource::class;

    protected function getActions(): array
    {
        return [
            Action::make('settings')->action('openSettingsModal')->requiresConfirmation(),
        ];
    }
 
    public function openSettingsModal() 
    {
        return "hola";
        $this->dispatchBrowserEvent('open-settings-modal');
    }

}

