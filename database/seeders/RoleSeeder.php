<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //KOORDINATOR
        $koordinator = new Role();
        $koordinator->name = 'koordinator';
        $koordinator->display_name = 'koordinator';
        $koordinator->description = '-';
        $koordinator->save();

        //DOSEN
        $dosen = new Role();
        $dosen->name = 'dosen';
        $dosen->display_name = 'dosen';
        $dosen->description = '-';
        $dosen->save();

        //MAHASISWA
        $mahasiswa = new Role();
        $mahasiswa->name = 'mahasiswa';
        $mahasiswa->display_name = 'mahasiswa';
        $mahasiswa->description = '-';
        $mahasiswa->save();

        //KOORDINATOR AKUN
        $user_koor = new User();
        $user_koor->name = 'Koordinator';
        $user_koor->email = 'koordinator@gmail.com';
        $user_koor->password = Hash::make('koordinator123');
        $user_koor->save();
        $user_koor->attachRole($koordinator);
    }
}
