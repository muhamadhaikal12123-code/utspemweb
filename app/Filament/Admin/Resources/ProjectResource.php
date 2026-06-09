<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),
                
                Forms\Components\TextInput::make('slug')
                    ->disabled()
                    ->dehydrated()
                    ->required()
                    ->unique(Project::class, 'slug', ignoreRecord: true),
                
                Forms\Components\TextInput::make('tech_stack')
                    ->placeholder('Contoh: Laravel, Filament, MariaDB')
                    ->required(),
                
                Forms\Components\TextInput::make('project_url')
                    ->url()
                    ->placeholder('https://github.com/...'),
                
                Forms\Components\TextInput::make('image')
                    ->label('URL Link Gambar Banner / Foto (Opsional)')
                    ->placeholder('Contoh: https://via.placeholder.com/600x400 atau kosongkan'),

                Forms\Components\Textarea::make('description')
                    ->required()
                    ->rows(3)
                    ->columnSpanFull(),
                
                // Ganti RichEditor ke Textarea standard dengan baris besar agar anti-crash asset
                Forms\Components\Textarea::make('status_progress')
                    ->label('Status / Progress Laporan Project Akhir (Gunakan format teks atau HTML manual)')
                    ->placeholder('Tulis latar belakang, analisis kebutuhan, ERD, atau progress sistem di sini...')
                    ->rows(15)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('tech_stack')->searchable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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