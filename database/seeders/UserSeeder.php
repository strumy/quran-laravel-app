<?php

namespace Database\Seeders;
 
use App\Models\User;
use Illuminate\Database\Seeder;
 
class UserSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::create([
            'name'     => 'User',
            'email'    => 'user@example.org',
            'password' => bcrypt('secret'),
            'user_type' => 'user',
        ]);

    }
}
