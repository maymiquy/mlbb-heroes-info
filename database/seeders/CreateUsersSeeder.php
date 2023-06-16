<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin',
               'email'=>'admin@mlbbheroes.com',
               'role'=>'admin',
               'password'=> bcrypt('admin001'),
            ],
            [
               'name'=>'Anggoro',
               'email'=>'anggoro@super.user',
               'role'=> 'admin',
               'password'=> bcrypt('seto6288'),
            ],
            [
               'name'=>'User',
               'email'=>'user@mlbbheroes.com',
               'role'=>'user',
               'password'=> bcrypt('user'),
            ],
            [
               'name'=>'Miqdam',
               'email'=>'miqdam@mlbbheroes.com',
               'role'=>'user',
               'password'=> bcrypt('miqdam12345'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}