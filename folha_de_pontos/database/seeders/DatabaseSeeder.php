<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use App\Models\Position;
use App\Models\Sector;
use App\Models\User;
use App\Models\Busines;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // SETORES
        $sectorGerente = Sector::create([
            'name' => 'Gerência',
        ])->id;

        $sectorSG = Sector::create([
            'name' => 'Limpeza',
        ])->id;

        // CARGOS
        $positionGerente = Position::create([
            'name' => 'Gerente',
            'sectors_id' => $sectorGerente,
        ])->id;

        $positionComum = Position::create([
            'name' => 'SG',
            'sectors_id' => $sectorSG
        ])->id;

        // EMPRESAS
        $business = Busines::create([
            'name' => 'SeridoSoft'
        ])->id;

        // USUARIOS
        $userAdmin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'cpf' => '123.456.789-10',
            'auto_register' => true,
            'business_id' => $business,
            'role' => 0,
            'position_id' => $positionGerente,
        ])->save();

        $userComum = User::create([
            'name' => 'comum',
            'email' => 'teste@teste.com',
            'password' => Hash::make('teste'),
            'cpf' => '000.000.000-00',
            'auto_register' => false,
            'business_id' => $business,
            'role' => 2,
            'position_id' => $positionComum,
        ])->id;

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
