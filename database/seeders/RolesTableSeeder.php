<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            [
                'name' => 'user',
                'level' => 1
            ],

            [
                'name' => 'editor',
                'level' => 2
            ],

            [
                'name' => 'moderator',
                'level' => 3
            ],

            [
                'name' => 'admin',
                'level' => 4
            ],
        ];

        foreach ($roles as $role) {
            $newRole = new Role();
            $newRole->name = $role['name'];
            $newRole->level = $role['level'];
            $newRole->save();
        }
    }
}
