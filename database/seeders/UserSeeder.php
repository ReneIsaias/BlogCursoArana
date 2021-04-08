<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'name'              => 'Canserbero',
          'email'             => 'admin@admin.com',
          'password'          => Hash::make('maquiabelico'),
        ])->assignRole('Administrador');

        User::factory(99)->create();
    }
}
