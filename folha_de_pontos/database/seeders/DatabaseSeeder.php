<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use App\Models\Position;
use App\Models\Sector;
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
        $sector = Sector::create([
            'name' => 'Gerência',
        ])->id;

        $position = Position::create([
            'name' => 'Gerente',
            'sectors_id' => $sector,
        ])->id;

        $userAdmin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'cpf' => '123.456.789-10',
            'auto_register' => true,
            'role' => 0,
            'position_id' => $position,
        ])->save();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
