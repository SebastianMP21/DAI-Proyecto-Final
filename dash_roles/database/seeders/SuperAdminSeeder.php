<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario =User::create([
            'name' => 'Sebastian Marquez',
            'email' => 'sebastianmarquez@gmail.com',
            'password' => bcrypt('Tecsup2021'),
        ]);

        //$rol = Role::create(['name'=>'Administrador']);

        //$permisos = Permission::pluck('id','id')->all();

        //$rol->syncPermissions($permisos);

        $usuario->assignRole('Administrador');
    }
}
