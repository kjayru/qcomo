<?php

use Illuminate\Database\Seeder;
use App\SystemService;

class SystemServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        SystemService::create([
            'nombre' => 'La carta mozo'
        ]);
        SystemService::create([
            'nombre' => 'Delivery'
        ]);
        SystemService::create([
            'nombre' => 'Reservas'
        ]);
        SystemService::create([
            'nombre' => 'Marketing'
        ]);
    }
}
