<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Creación de los roles */
        $admin = Role::create(['name'  => 'Administrador',]);

        $blog = Role::create(['name'  => 'Blogger',]);

        /* Creación de los permisos */
        $perm1 = Permission::create([
            'name'          => 'admin.home',
            'description'   => 'Ver el dashboard',
        ])->syncRoles([$admin, $blog]);


        Permission::create([
            'name'          => 'admin.categories.index',
            'description'   => 'Ver listado de categorías',
        ])->syncRoles([$admin, $blog]);
        Permission::create([
            'name'          => 'admin.categories.create',
            'description'   => 'Crear categoría',
        ])->syncRoles([$admin]);
        Permission::create([
            'name'          => 'admin.categories.edit',
            'description'   => 'Editar categoría',
        ])->syncRoles([$admin]);
        Permission::create([
            'name'          => 'admin.categories.destroy',
            'description'   => 'Eliminar categoría',
        ])->syncRoles([$admin]);

        Permission::create([
            'name'          => 'admin.tags.index',
            'description'   => 'Ver listado de etiquetas',
        ])->syncRoles([$admin, $blog]);
        Permission::create([
            'name'          => 'admin.tags.create',
            'description'   => 'Crear etiqueta',
        ])->syncRoles([$admin]);
        Permission::create([
            'name'          => 'admin.tags.edit',
            'description'   => 'Editar etiqueta',
        ])->syncRoles([$admin]);
        Permission::create([
            'name'          => 'admin.tags.destroy',
            'description'   => 'Eliminar etiqueta',
        ])->syncRoles([$admin]);

        Permission::create([
            'name'          => 'admin.users.index',
            'description'   => 'Ver listado de usuarios',
        ])->syncRoles([$admin]);
        Permission::create([
            'name'          => 'admin.users.edit',
            'description'   => 'Editar usuario',
        ])->syncRoles([$admin]);
        Permission::create([
            'name'          => 'admin.users.update',
            'description'   => 'Actualizar usuarios',
        ])->syncRoles([$admin]);

        Permission::create([
            'name'          => 'admin.posts.index',
            'description'   => 'Ver listado de posts',
        ])->syncRoles([$admin, $blog]);
        Permission::create([
            'name'          => 'admin.posts.create',
            'description'   => 'Crear post',
        ])->syncRoles([$admin, $blog]);
        Permission::create([
            'name'          => 'admin.posts.edit',
            'description'   => 'Editar un post',
        ])->syncRoles([$admin, $blog]);
        Permission::create([
            'name'          => 'admin.posts.destroy',
            'description'   => 'Eliminar un post',
        ])->syncRoles([$admin, $blog]);


    }
}
