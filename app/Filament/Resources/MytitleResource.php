<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MytitleResource\Pages;
use App\Filament\Resources\MytitleResource\RelationManagers;
use App\Models\Mytitle;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MytitleResource extends Resource
{
    protected static ?string $model = Mytitle::class;
    
        //global search
    protected static ?string $recordTitleAttribute = 'titlename';

    protected static ?string $navigationIcon = 'heroicon-o-user-add';
    
    protected static ?string $navigationLabel = 'My profession';

    //Group Manajemen
    protected static ?string $navigationGroup = 'Personal Information';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('titlename')
                ->required()
                ->maxLength(255),
            
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('titlename'),
            
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
            'index' => Pages\ListMytitles::route('/'),
            'create' => Pages\CreateMytitle::route('/create'),
            'edit' => Pages\EditMytitle::route('/{record}/edit'),
        ];
    }    
}
