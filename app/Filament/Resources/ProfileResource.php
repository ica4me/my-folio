<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfileResource\Pages;
use App\Filament\Resources\ProfileResource\RelationManagers;
use App\Models\Profile;
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

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;
    
    //global search
    protected static ?string $recordTitleAttribute = 'namalengkap';
    
    
    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    
    protected static ?string $navigationLabel = 'Profile';


    //Group Manajemen
    protected static ?string $navigationGroup = 'Personal Information';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()->schema([
            Forms\Components\FileUpload::make('icon')
                ->required()->image()->disk('public'),

            Forms\Components\TextInput::make('logonama')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('namalengkap')
                ->required()
                ->maxLength(255),

            Forms\Components\FileUpload::make('foto')
                ->required()->image()->disk('public'),

            Forms\Components\RichEditor::make('detail')
                ->required()
                ->maxLength(10255),
            
            Forms\Components\FileUpload::make('cv')
               // ->required()
               ->label('Upload CV.')
                ->acceptedFileTypes(['application/pdf']) // Memperbolehkan hanya file PDF
                ->disk('public'),
            
            
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('namalengkap')
                    ->label('Nama Lengkap'),
                Tables\Columns\ImageColumn::make('foto')
                    ->label('Image'),
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
              //  Tables\Actions\DeleteBulkAction::make()->after(
                //    function(Collection $records){
                  //          foreach($records as $key => $value){
                 ///               if($value->foto){
                  //                  Storage::disk('public')->delete($value->foto);
                  //              }
                 //           }
    
                //    }),
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
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }    
}
