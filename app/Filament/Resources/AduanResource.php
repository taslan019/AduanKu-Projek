<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Aduan;
use App\Models\Layanan;
use Filament\Forms\Form;
use App\Models\Organisasi;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AduanResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AduanResource\RelationManagers;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Support\Collection;

class AduanResource extends Resource
{
    protected static ?string $model = Aduan::class;

    protected static ?string $navigationIcon = 'heroicon-o-megaphone';
    protected static ?string $navigationLabel = 'Aduan';
    protected static ?string $pluralLabel = 'Daftar Aduan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('nama')->required()->maxLength(255),
                        TextInput::make('no_hp')->required(),
                        TextInput::make('email')->required()->email(),
                        Select::make('id_layanan')
                            ->label('Layanan')
                            ->options(Layanan::all()->pluck('nama', 'id'))->searchable(),
                        Select::make('id_organisasi')
                            ->label('Organisasi')
                            ->options(Organisasi::all()->pluck('nama', 'id'))->searchable(),
                        Textarea::make('deskripsi')->required(),
                        Hidden::make('no_tiket')->default(fn() => 'TES-' . strtoupper(Str::random(6))),
                        Select::make('status')
                            ->options([
                                'baru' => 'baru',
                                'proses' => 'proses',
                                'selesai' => 'selesai',
                                'menunggu_informasi' => 'menunggu informasi',
                                'ditolak' => 'ditolak',
                            ]),
                    ])
                    ->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->sortable()->searchable(),
                TextColumn::make('no_hp')->label('Nomor Telepon')->sortable()->searchable(),
                TextColumn::make('email')->sortable()->searchable(),
                TextColumn::make('no_tiket')->sortable()->searchable(),
                TextColumn::make('layanan.nama')->sortable()->searchable(),
                TextColumn::make('organisasi.nama')->sortable()->searchable(),
                TextColumn::make('deskripsi')->sortable()->searchable(),
                TextColumn::make('status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'baru' => 'gray',
                        'proses' => 'warning',
                        'menunggu_informasi' => 'primary',
                        'selesai' => 'success',
                        'ditolak' => 'danger',
                    })->sortable()->searchable(),
            ])
            ->filters([
                SelectFilter::make('status')
                ->multiple()
                ->options([
                                'baru' => 'baru',
                                'proses' => 'proses',
                                'selesai' => 'selesai',
                                'menunggu_informasi' => 'menunggu informasi',
                                'ditolak' => 'ditolak',
                            ])

            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    BulkAction::make('Change Status')
                    ->icon('heroicon-m-check')
                    ->requiresConfirmation()
                    ->form([
                        Select::make('status')
                        ->label('Status')
                        ->options([
                                'baru' => 'baru',
                                'proses' => 'proses',
                                'selesai' => 'selesai',
                                'menunggu_informasi' => 'menunggu informasi',
                                'ditolak' => 'ditolak',
                        ])
                        ->required(),
                    ])
                    ->action(function (Collection $records, array $data){
                        $records->each(function($record) use ($data){
                            Aduan::where('id', $record->id)->update(['status' => $data['status']]);
                        });
                    }),
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListAduans::route('/'),
            'create' => Pages\CreateAduan::route('/create'),
            'edit' => Pages\EditAduan::route('/{record}/edit'),
        ];
    }
}
