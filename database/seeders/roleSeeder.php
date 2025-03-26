<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::insert([
            [
                'role_name' => 'Super Admin',
                'slug' => 'super-admin'
            ],
            [
                'role_name' => 'Admin',
                'slug' => 'admin'
            ],
            [
                'role_name' => 'Author',
                'slug' => 'author'
            ],
            [
                'role_name' => 'Student',
                'slug' => 'student'
            ]
        ]);
    }
}
