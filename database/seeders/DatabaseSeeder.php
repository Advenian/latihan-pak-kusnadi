<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */  
    public function run(): void
    {

        \App\Models\User::factory()->create([
            
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => 'admin',
        ]);
        
        \App\Models\User::factory()->create([
            
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => 'user',
            

        ]);
        \App\Models\User::factory()->create([
            
                'name' => 'Athar',
                'email' => 'athar@gmail.com',
                'password' => 'athar',
            

        ]);
        \App\Models\User::factory(2)->create();
    }
}
