<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobPostingResource\Pages;
use App\Filament\Resources\JobPostingResource\RelationManagers;
use App\Models\JobPosting;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class JobPostingResource extends Resource
{
    protected static ?string $model = JobPosting::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('company_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('description')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('location')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('currency')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('status')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('requirements')
                    ->maxLength(65535),
                // TinyEditor::make('requirements'),
                Forms\Components\TextInput::make('hiring_modality')
                    ->maxLength(100),
                Forms\Components\TextInput::make('work_modality')
                    ->maxLength(100),
                Forms\Components\TextInput::make('english_level')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('seniority')
                    ->maxLength(100),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('company_name'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('location'),
                Tables\Columns\TextColumn::make('currency'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('requirements'),
                Tables\Columns\TextColumn::make('hiring_modality'),
                Tables\Columns\TextColumn::make('work_modality'),
                Tables\Columns\TextColumn::make('english_level'),
                Tables\Columns\TextColumn::make('seniority'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJobPostings::route('/'),
            'create' => Pages\CreateJobPosting::route('/create'),
            'edit' => Pages\EditJobPosting::route('/{record}/edit'),
        ];
    } 


    
//     public static function getWidgets(): array
// {
//     return [
       
//     ];
// }
}
