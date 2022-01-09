<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        User::create([
            /*
            'name' => 'azis',
            'email' => 'muhamadazis9a@gmail.com',
            'password' => Hash::make('azis'),
            'level' => 'admin' */
            'name' => 'azis32',
            'email' => 'muhamadazis32@gmail.com',
            'password' => 'azis',
            'level' => 'admin' 
        ]);
    }

}
