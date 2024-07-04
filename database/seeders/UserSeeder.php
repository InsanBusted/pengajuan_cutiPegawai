<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $admin->assignRole('admin');

        // $pegawai = User::create([
        //     'name' => 'pegawai',
        //     'email' => 'pegawai@gmail.com',
        //     'password' => bcrypt('12345678')
        // ]);
        // $pegawai->assignRole('pegawai');
  
        // $pegawai = User::create([
        //     'name' => 'pegawai1',
        //     'email' => 'pegawai1@gmail.com',
        //     'password' => bcrypt('12345678')
        // ]);
        // $pegawai->assignRole('pegawai');

        for ($i = 1; $i <= 5; $i++) {
            $pegawai = User::create([
                'name' => 'pegawai' . $i,
                'email' => 'pegawai' . $i . '@gmail.com',
                'password' => bcrypt('12345678')
            ]);
            $pegawai->assignRole('pegawai');
        }
    }
}
