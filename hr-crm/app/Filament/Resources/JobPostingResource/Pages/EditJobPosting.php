<?php

namespace App\Filament\Resources\JobPostingResource\Pages;

use App\Filament\Resources\JobPostingResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJobPosting extends EditRecord
{
    protected static string $resource = JobPostingResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
