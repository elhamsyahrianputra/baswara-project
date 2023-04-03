<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\UserHasRole;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserHasRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $roles = Role::all();

        $courseStudents = [
            [
                'user_id' => $users[0]->id,
                'role_id' => $roles[0]->id,
                'created_at' => now(),
            ],
            [
                'user_id' => $users[1]->id,
                'role_id' => $roles[1]->id,
                'created_at' => now(),
            ],
            [
                'user_id' => $users[2]->id,
                'role_id' => $roles[2]->id,
                'created_at' => now(),
            ],
            [
                'user_id' => $users[3]->id,
                'role_id' => $roles[2]->id,
                'created_at' => now(),
            ],
        ];

        DB::table('user_has_roles')->insert($courseStudents);
    }
}
