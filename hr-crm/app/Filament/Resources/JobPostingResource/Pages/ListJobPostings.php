<?php

namespace App\Filament\Resources\JobPostingResource\Pages;

use App\Filament\Resources\JobPostingResource;
use Filament\Pages\Actions;

use Filament\Resources\Pages\ListRecords;

class ListJobPostings extends ListRecords
{
    protected static string $resource = JobPostingResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    

    // protected function getHeaderWidgets(): array
    // {
    //     return [
           
    //     ];
    // }
}
