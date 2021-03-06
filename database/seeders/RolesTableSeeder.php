<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'admin',
            'user'
        ];

        foreach ($roles as $role) {
            $r = Role::create(['name' => $role]);
            if ($role == 'admin') {
                $permissions = [
                    'role-list',
                    'role-create',
                    'role-edit',
                    'role-delete',
                    'user-list',
                    'user-create',
                    'user-edit',
                    'user-delete',
                    'permission-list',
                    'permission-create',
                    'permission-edit',
                    'permission-delete',
                ];
                foreach ($permissions as $p)
                    $r->givePermissionTo($p);
            }
        }
    }
}
