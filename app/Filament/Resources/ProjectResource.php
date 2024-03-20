<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Notifications\Collection;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;
    
    //global search
    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationIcon = 'heroicon-o-view-boards';
    
    protected static ?string $navigationLabel = 'My Project';


    //Group Manajemen
    protected static ?string $navigationGroup = 'My Skill';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()->schema([
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
            Forms\Components\RichEditor::make('detail')
                ->required()
                ->maxLength(10255),
            Forms\Components\FileUpload::make('foto')
                ->required()->image()->disk('public'),
            Forms\Components\TextInput::make('link')
                ->maxLength(255),
            
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->limit('50')->sortable()->searchable(),
                Tables\Columns\ImageColumn::make('foto'),
                Tables\Columns\TextColumn::make('link')->limit('20'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
            ])


            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()->after(
                    function(Collection $records){
                            foreach($records as $key => $value){
                                if($value->foto){
                                    Storage::disk('public')->delete($value->foto);
                                }
                            }
    
                    }),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }    
}
