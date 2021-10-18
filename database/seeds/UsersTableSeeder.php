<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\User::insert([
            [
              'id'  			=> 1,
              'name'  			=> 'Gilangcoding - Admin',
              'username'		=> 'admin123',
              'email' 			=> '123456@gilang.com',
              'password'		=> bcrypt('admin123'),
              'gambar'			=> NULL,
              'level'			=> 'admin',
              'remember_token'	=> NULL,
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
              'id'  			  => 2,
              'name'  			=> 'Gilang - User',
              'username'		=> 'user123',
              'email' 			=> '654321@gilang.com',
              'password'		=> bcrypt('user123'),
              'gambar'			=> NULL,
              'level'			  => 'user',
              'remember_token'	=> NULL,
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ]
        ]);
    }
}
