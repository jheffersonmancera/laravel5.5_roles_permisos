<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;//Llamo al modelo que se encuentra en  vendor/caffeinated/shinobi/src/models

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	//Users
        Permission::create([//Este modelo queda ubicado en el modulo que instalamos en vendor/caffeinated/shinobi/src/models
        	'name'				=>'Navegar usuarios',
        	'slug'				=>'users.index',
        	'description'		=>'Lista y Navega todos los usuarios del sistema',
        ]);
        Permission::create([
        	'name'				=>'Ver detalle de usuario',
        	'slug'				=>'users.show',
        	'description'		=>'Ver en detalle cada usuario del sistema',
        ]);
        
        Permission::create([
        	'name'				=>'Edicion de usuarios',
        	'slug'				=>'users.edit',
        	'description'		=>'Editar cualquier dato de un usuario del sistema',
        ]);
        
        Permission::create([
        	'name'				=>'Eliminar usuario',
        	'slug'				=>'users.destroy',
        	'description'		=>'Eliminar cualquier usuario del sistema',
        ]);
        


        //Roles
        Permission::create([
        	'name'				=>'Navegar roles',
        	'slug'				=>'roles.index',
        	'description'		=>'Lista y Navega todos los roles del sistema',
        ]);
        Permission::create([
        	'name'				=>'Ver detalle de rol',
        	'slug'				=>'roles.show',
        	'description'		=>'Ver en detalle cada rol del sistema',
        ]);
        
        Permission::create([
        	'name'				=>'Creación de roles',
        	'slug'				=>'roles.create',
        	'description'		=>'Editar cualquier dato de un rol del sistema',
        ]);
        
        Permission::create([
        	'name'				=>'Edicion de roles',
        	'slug'				=>'roles.edit',
        	'description'		=>'Editar cualquier dato de un rol del sistema',
        ]);
        
        Permission::create([
        	'name'				=>'Eliminar roles',
        	'slug'				=>'roles.destroy',
        	'description'		=>'Eliminar cualquier rol del sistema',
        ]);
        


        //Productos
        Permission::create([
        	'name'				=>'Navegar productos',
        	'slug'				=>'productos.index',
        	'description'		=>'Lista y Navega todos los productos del sistema',
        ]);
        Permission::create([
        	'name'				=>'Ver detalle de producto',
        	'slug'				=>'productos.show',
        	'description'		=>'Ver en detalle cada rol del sistema',
        ]);
        
        Permission::create([
        	'name'				=>'Creación de productos',
        	'slug'				=>'productos.create',
        	'description'		=>'Editar cualquier dato de un producto del sistema',
        ]);
        
        Permission::create([
        	'name'				=>'Edicion de productos',
        	'slug'				=>'productos.edit',
        	'description'		=>'Editar cualquier dato de un producto del sistema',
        ]);
        
        Permission::create([
        	'name'				=>'Eliminar productos',
        	'slug'				=>'productos.destroy',
        	'description'		=>'Eliminar cualquier producto del sistema',
        ]);

    }
}
