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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\User::create([
            'nama' => 'admin',
            'prodi' => 'ilmu komputer',
            'nim' => 123,
            'role' => 'admin',
            'password' =>\Illuminate\Support\Facades\Hash::make("123")
        ]);

        \App\Models\User::create([
            'nama' => 'user',
            'prodi' => 'ilmu komputer',
            'nim' => 456,
            'role' => 'responden',
            'password' =>\Illuminate\Support\Facades\Hash::make("456")
        ]);


    }
}
