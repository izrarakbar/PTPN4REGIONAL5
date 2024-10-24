<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LoginLogResource\Pages;
use App\Filament\Resources\LoginLogResource\RelationManagers;
use App\Models\LoginLog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LoginLogResource extends Resource
{
    protected static ?string $model = LoginLog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';



    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->label('User'),
                TextColumn::make('login_at')->label('Login Time')->sortable(),
            ])
            ->filters([
                // Kamu bisa menambahkan filter di sini, seperti filter berdasarkan bulan atau minggu
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
            'index' => Pages\ListLoginLogs::route('/'),
            'create' => Pages\CreateLoginLog::route('/create'),
            'edit' => Pages\EditLoginLog::route('/{record}/edit'),
        ];
    }
}
