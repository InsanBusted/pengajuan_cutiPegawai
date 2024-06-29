<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'tambah-pegawai']);
        Permission::create(['name' => 'edit-pegawai']);
        Permission::create(['name' => 'delete-pegawai']);
        Permission::create(['name' => 'detail-pegawai']);

        Permission::create(['name' => 'tambah-data']);
        Permission::create(['name' => 'edit-data']);
        Permission::create(['name' => 'delete-data']);
        Permission::create(['name' => 'detail-data']);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'pegawai']);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('tambah-pegawai');
        $roleAdmin->givePermissionTo('edit-pegawai');
        $roleAdmin->givePermissionTo('delete-pegawai');
        $roleAdmin->givePermissionTo('detail-pegawai');

        $rolePegawai = Role::findByName('pegawai');
        $rolePegawai->givePermissionTo('tambah-data');
        $rolePegawai->givePermissionTo('edit-data');
        $rolePegawai->givePermissionTo('delete-data');
        $rolePegawai->givePermissionTo('detail-data');
    }
}
