<?php

use Illuminate\Database\Seeder;
use App\ContactSystem;

class ContactSystemtableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ContactSystem::create([
            'email' => 'admin@qcomo.com',
            'sms' => '+51963237213',
            'whatsapp' => '+51963237213',
            'direccion' => 'Avenida siempre via 123',
            'facebook' => 'facebook.com/page=?qcomo',
        ]);
    }
}
