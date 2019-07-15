<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //usuarios
        Permission::create([
            'name' => 'Navegar usuarios',
            'slug' => 'users.index',
            'description' => 'Lista y navega usuarios',
        ]);

        Permission::create([
            'name' => 'ver detalle',
            'slug' => 'users.show',
            'description' => 'ver detalle usuarios',
        ]);

        Permission::create([
            'name' => 'Edicion usuarios',
            'slug' => 'users.edit',
            'description' => 'editar detalle usuarios',
        ]);

        Permission::create([
            'name' => 'Eliminar usuarios',
            'slug' => 'users.destroy',
            'description' => 'Elimnar usuarios',
        ]);


        //Roles
        Permission::create([
            'name' => 'Navegar rol',
            'slug' => 'roles.index',
            'description' => 'Lista y navega rol',
        ]);

        Permission::create([
            'name' => 'ver detalle rol',
            'slug' => 'roles.show',
            'description' => 'ver detalle rol',
        ]);

        Permission::create([
            'name' => 'crear  rol',
            'slug' => 'roles.create',
            'description' => 'ver detalle rol',
        ]);

        Permission::create([
            'name' => 'Edicion rol',
            'slug' => 'roles.edit',
            'description' => 'editar detalle rol',
        ]);

        Permission::create([
            'name' => 'Eliminar rol',
            'slug' => 'roles.destroy',
            'description' => 'Elimnar rol',
        ]);

        //Franchisse
        Permission::create([
            'name' => 'Navegar franquicia',
            'slug' => 'franchisees.index',
            'description' => 'Lista y navega franquicia',
        ]);

        Permission::create([
            'name' => 'ver detalle franquicia',
            'slug' => 'franchisees.show',
            'description' => 'ver detalle franquicia',
        ]);

        Permission::create([
            'name' => 'crear  franquicia',
            'slug' => 'franchisees.create',
            'description' => 'ver detalle franquicia',
        ]);

        Permission::create([
            'name' => 'Edicion franquicia',
            'slug' => 'franchisees.edit',
            'description' => 'editar detalle franquicia',
        ]);

        Permission::create([
            'name' => 'Eliminar franquicia',
            'slug' => 'franchisees.destroy',
            'description' => 'Elimnar franquicia',
        ]);

        //clients
        Permission::create([
            'name' => 'Navegar cliente',
            'slug' => 'clients.index',
            'description' => 'Lista y navega cliente',
        ]);

        Permission::create([
            'name' => 'ver detalle clientes',
            'slug' => 'clients.show',
            'description' => 'ver detalle clientes',
        ]);

        Permission::create([
            'name' => 'crear  clientes',
            'slug' => 'clients.create',
            'description' => 'ver detalle clientes',
        ]);

        Permission::create([
            'name' => 'Edicion clientes',
            'slug' => 'clients.edit',
            'description' => 'editar detalle clientes',
        ]);

        Permission::create([
            'name' => 'Eliminar clientes',
            'slug' => 'clients.destroy',
            'description' => 'Elimnar clientes',
        ]);


        //mozos

        Permission::create([
            'name' => 'Navegar mozo',
            'slug' => 'mozos.index',
            'description' => 'Lista y navega mozo',
        ]);

        Permission::create([
            'name' => 'ver detalle mozo',
            'slug' => 'mozos.show',
            'description' => 'ver detalle mozo',
        ]);

        Permission::create([
            'name' => 'crear  mozo',
            'slug' => 'mozos.create',
            'description' => 'ver detalle mozo',
        ]);

        Permission::create([
            'name' => 'Edicion mozo',
            'slug' => 'mozos.edit',
            'description' => 'editar detalle mozo',
        ]);

        Permission::create([
            'name' => 'Eliminar mozo',
            'slug' => 'mozos.destroy',
            'description' => 'Elimnar mozo',
        ]);

        //mesas

        Permission::create([
            'name' => 'Navegar mesa',
            'slug' => 'mesas.index',
            'description' => 'Lista y navega mesa',
        ]);

        Permission::create([
            'name' => 'ver detalle mesa',
            'slug' => 'mesas.show',
            'description' => 'ver detalle mesa',
        ]);

        Permission::create([
            'name' => 'crear  mesa',
            'slug' => 'mesas.create',
            'description' => 'ver detalle mesa',
        ]);

        Permission::create([
            'name' => 'Edicion mesa',
            'slug' => 'mesas.edit',
            'description' => 'editar detalle mesa',
        ]);

        Permission::create([
            'name' => 'Eliminar mesa',
            'slug' => 'mesas.destroy',
            'description' => 'Elimnar mesa',
        ]);
    
    //la carta
        
        Permission::create([
            'name' => 'Navegar carta',
            'slug' => 'lacartas.index',
            'description' => 'Lista y navega carta',
        ]);

        Permission::create([
            'name' => 'ver detalle carta',
            'slug' => 'lacartas.show',
            'description' => 'ver detalle carta',
        ]);

        Permission::create([
            'name' => 'crear  carta',
            'slug' => 'lacartas.create',
            'description' => 'ver detalle carta',
        ]);

        Permission::create([
            'name' => 'Edicion carta',
            'slug' => 'lacartas.edit',
            'description' => 'editar detalle carta',
        ]);

        Permission::create([
            'name' => 'Eliminar carta',
            'slug' => 'lacartas.destroy',
            'description' => 'Elimnar carta',
        ]);

    //ingredients
        Permission::create([
            'name' => 'Navegar ingrediente',
            'slug' => 'ingredients.index',
            'description' => 'Lista y navega ingrediente',
        ]);

        Permission::create([
            'name' => 'ver detalle ingrediente',
            'slug' => 'ingredients.show',
            'description' => 'ver detalle ingrediente',
        ]);

        Permission::create([
            'name' => 'crear  ingrediente',
            'slug' => 'ingredients.create',
            'description' => 'ver detalle ingrediente',
        ]);

        Permission::create([
            'name' => 'Edicion ingrediente',
            'slug' => 'ingredients.edit',
            'description' => 'editar detalle ingrediente',
        ]);

        Permission::create([
            'name' => 'Eliminar ingrediente',
            'slug' => 'ingredients.destroy',
            'description' => 'Elimnar ingrediente',
        ]);

        //categories
        Permission::create([
            'name' => 'Navegar categoria',
            'slug' => 'categories.index',
            'description' => 'Lista y navega categoria',
        ]);

        Permission::create([
            'name' => 'ver detalle categoria',
            'slug' => 'categories.show',
            'description' => 'ver detalle categoria',
        ]);

        Permission::create([
            'name' => 'crear  categoria',
            'slug' => 'categories.create',
            'description' => 'ver detalle categoria',
        ]);

        Permission::create([
            'name' => 'Edicion categoria',
            'slug' => 'categories.edit',
            'description' => 'editar detalle categoria',
        ]);

        Permission::create([
            'name' => 'Eliminar categoria',
            'slug' => 'categories.destroy',
            'description' => 'Elimnar categoria',
        ]);

        //salsas
        Permission::create([
            'name' => 'Navegar salsa',
            'slug' => 'salsas.index',
            'description' => 'Lista y navega salsa',
        ]);

        Permission::create([
            'name' => 'ver detalle salsa',
            'slug' => 'salsas.show',
            'description' => 'ver detalle salsa',
        ]);

        Permission::create([
            'name' => 'crear  salsa',
            'slug' => 'salsas.create',
            'description' => 'ver detalle salsa',
        ]);

        Permission::create([
            'name' => 'Edicion salsa',
            'slug' => 'salsas.edit',
            'description' => 'editar detalle salsa',
        ]);

        Permission::create([
            'name' => 'Eliminar salsa',
            'slug' => 'salsas.destroy',
            'description' => 'Elimnar salsa',
        ]);

        //publicidad
        Permission::create([
            'name' => 'Navegar salsa',
            'slug' => 'publicidad.index',
            'description' => 'Lista y navega salsa',
        ]);

        Permission::create([
            'name' => 'ver detalle salsa',
            'slug' => 'publicidad.show',
            'description' => 'ver detalle salsa',
        ]);

        Permission::create([
            'name' => 'crear  salsa',
            'slug' => 'publicidd.create',
            'description' => 'ver detalle salsa',
        ]);

        Permission::create([
            'name' => 'Edicion salsa',
            'slug' => 'publicidad.edit',
            'description' => 'editar detalle salsa',
        ]);

        Permission::create([
            'name' => 'Eliminar salsa',
            'slug' => 'publicidad.destroy',
            'description' => 'Elimnar salsa',
        ]);

    }
}
