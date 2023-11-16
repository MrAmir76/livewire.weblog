<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::query()->create(
            [
                'name' => 'Amir',
                'username' => 'admin',
                'password' => Hash::make('admin')
            ]
        );
    }
}
