<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PerpageSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(FormacaosTableSeeder::class);
        $this->call(FuncaosTableSeeder::class);
        


        $this->call(acl::class);
    }
}
