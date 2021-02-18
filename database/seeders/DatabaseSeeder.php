<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'cpf'           => '12345678911',
            'name'          => 'Vinicius',
            'phone'         => '21999999999',
            'birth'         => '2003-03-27',
            'gender'        => 'M',
            'email'         => 'vinicius@sistema.com',
            'password'      => bcrypt('123456'),
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
