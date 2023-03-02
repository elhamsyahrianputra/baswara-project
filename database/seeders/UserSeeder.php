<?php

namespace Database\Seeders;


use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => hash::make('qwertyui'),
            'avatar_url' => 'user\default\avatar_default.jpg',
            'gender' => 1,
            'birthdate' => Carbon::parse('2002-04-22'),
            'about_me' => 'admin account',
        ]);
    
        User::create([
            'name' => 'Elham Syahrian Putra',
            'email' => 'elham@gmail.com',
            'password' => hash::make('qwertyui'),
            'avatar_url' => 'user\default\avatar_default.jpg',
            'gender' => 1,
            'birthdate' => Carbon::parse('2002-04-22'),
            'about_me' => 'Hello My name is Elham Syahrian Putra',
        ]);
        User::create([
            'name' => 'Muhammad Aditya Wisnu Wardana',
            'email' => 'adit@gmail.com',
            'password' => hash::make('qwertyui'),
            'avatar_url' => 'user\default\avatar_default.jpg',
            'gender' => 1,
            'birthdate' => Carbon::parse('2002-02-22'),
            'about_me' => 'Hello My name is Muhammad Aditya Wisnu Wardana',
        ]);
        User::create([
            'name' => 'Muhammad Hardiansyah',
            'email' => 'ardian@gmail.com',
            'password' => hash::make('qwertyui'),
            'avatar_url' => 'user\default\avatar_default.jpg',
            'gender' => 1,
            'birthdate' => Carbon::parse('2002-10-10'),
            'about_me' => 'Hello My name is Muhammad Hardiansyah',
        ]);
    }
}
