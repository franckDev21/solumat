<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Solumat',
            'email' => 'solumatgn@gmail.com',
            'password' => Hash::make('password1234'),
            'role' => 'ADMIN'
        ]);

        \App\Models\Product::factory(15)->create();
    }
}
