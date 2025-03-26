<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class defaultAdminPath extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::find(1);
        $author = Role::find(2);

        if($role){
            $role->paths()->attach(1);
            $role->paths()->attach(2);
            $role->paths()->attach(4);
            $role->paths()->attach(5);
            $role->paths()->attach(6);
            $role->paths()->attach(7);

            $author->paths()->attach(1);
            $author->paths()->attach(2);
            $author->paths()->attach(4);
            $author->paths()->attach(5);
            $author->paths()->attach(6);
            $author->paths()->attach(7);
        }else{
            echo "role not found";
        }

    }
}
