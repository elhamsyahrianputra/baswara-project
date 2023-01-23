<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                'id' => Str::orderedUuid(),
                'name' => 'Elham Syahrian Putra',
                'email' => 'elham@gmail.com',
                'password' => hash::make('qwertyui'),
                'avatar_url' => 'default-avatar.jpg',
                'gender' => 1,
                'birthdate' => Carbon::parse('2002-04-22'),
                'about_me' => 'Hello My name is Elham Syahrian Putra',
            ],
            [
                'id' => Str::orderedUuid(),
                'name' => 'Angelina Christy',
                'email' => 'christy@gmail.com',
                'password' => hash::make('qwertyui'),
                'avatar_url' => 'default-avatar.jpg',
                'gender' => 2,
                'birthdate' => Carbon::parse('2005-12-05'),
                'about_me' => 'Hello My name is Angelina Christy',
            ],
            [
                'id' => Str::orderedUuid(),
                'name' => 'Marsha Lenathea',
                'email' => 'marsha@gmail.com',
                'password' => hash::make('qwertyui'),
                'avatar_url' => 'default-avatar.jpg',
                'gender' => 2,
                'birthdate' => Carbon::parse('2006-01-09'),
                'about_me' => 'Hello My name is Marsha Lenathea',
            ],
            [
                'id' => Str::orderedUuid(),
                'name' => 'Muhammad Hardiansyah',
                'email' => 'ardian@gmail.com',
                'password' => hash::make('qwertyui'),
                'avatar_url' => 'default-avatar.jpg',
                'gender' => 1,
                'birthdate' => Carbon::parse('2002-10-10'),
                'about_me' => 'Hello My name is Muhammad Hardiansyah',
            ],
        ];

        DB::table('users')->insert($users);
    }
}
