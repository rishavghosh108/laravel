<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Path;

class superAdminPathSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Path::insert([
            [
                'path_name' => 'root',
                'path' => '/'
            ],
            [
                'path_name' => 'Home',
                'path' => 'home'
            ],
            [
                'path_name' => 'Signup',
                'path' => 'signup'
            ],
            [
                'path_name' => 'Login',
                'path' => 'login'
            ],
            [
                'path_name' => 'Dashboard',
                'path' => 'dashboard'
            ],
            [
                'path_name' => 'Manage User',
                'path' => 'dashboard/manageuser'
            ],
            [
                'path_name' => 'Manage Permission',
                'path' => 'dashboard/managepermission'
            ]
        ]);
    }
}
