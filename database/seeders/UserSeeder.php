<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name'=>'admin',
            'username'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('123'),
        ]);
        $admin->assignRole('admin');


        $pengguna = User::create([
            'name'=>'pengguna',
            'username'=>'pengguna',
            'email'=>'pengguna@gmail.com',
            'password'=>Hash::make('456'),
        ]);
        $pengguna ->assignRole('pengguna');
    }
}
