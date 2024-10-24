<?php

namespace App\Filament\Aunt;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Component;
use Filament\Pages\Auth\Login;

class CustomLogin extends Login
{
    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getLoginFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getRememberFormComponent(),
                    ])
                    ->statePath('data'),
            ),
        ];
    }

    protected function getLoginFormComponent(): Component
    {
        return TextInput::make('login')
            ->label(__('NIK SAP'))
            ->numeric()
            ->required()
            ->autocomplete()
            ->autofocus()
            ->extraInputAttributes(['tabindex' => 1]);
    }

    protected function getCredentialsFromFormData(array $data): array
    {
        // Corrected variable declaration and logic
        $login_type = filter_var($data['login'], FILTER_VALIDATE_EMAIL) ? 'email' : 'NIK_SAP';

        return [
            $login_type => $data['login'],
            'password' => $data['password'],
        ];
    }
}