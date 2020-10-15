<?php

use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Role::truncate();

        Role::insert([
            ['name' => 'admin'],
            ['name' => 'author'],
            ['name' => 'user']
        ]);
    }
}
