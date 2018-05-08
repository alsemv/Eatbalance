<?php

namespace App\Console\Commands\User;

use App\User;
use Illuminate\Console\Command;

class RoleCommand extends Command
{
    protected $signature = 'users:role {email} {role}';
    protected $description = 'Set role for users by email';

    public function handle(): bool
    {
        $email = $this->argument('email');
        $role = $this->argument('role');

        if (!$user = User::where('email', $email)->first()) {
            $this->error('Нет пользователя с таким мейлом ' . $email);
            return false;
        }

        try {
            $user->changeRole($role);
        } catch (\DomainException $e) {
            $this->error($e->getMessage());
            return false;
        }

        $this->info('Роль успешно изменена');
        return true;
    }
}