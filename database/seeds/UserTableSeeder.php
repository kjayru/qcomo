<?php

use Illuminate\Database\Seeder;

use App\User;
use Illuminate\Support\Facades\DB; 
use Caffeinated\Shinobi\Models\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        $userQuantity = 30;
        factory(User::class, $userQuantity)->create();

        Role::create([
            'name' => 'Administrador',
            'slug' => 'admin',
            'description' => 'Administrador general',
        ]);

        Role::create([
            'name' => 'Franquicia',
            'slug' => 'anunciante',
            'description' => 'Administrador de franquicias',
        ]);
        Role::create([
            'name' => 'Mozo',
            'slug' => 'mozo',
            'description' => 'mozo ',
        ]);

        Role::create([
            'name' => 'Caja',
            'slug' => 'caja',
            'description' => 'caja ventas ',
        ]);

        Role::create([
            'name' => 'usuario',
            'slug' => 'usuario',
            'description' => 'usuario app o restaurant',
        ]);
    }

    
}
