<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'r_name' => "dev"
        ]);
        DB::table('roles')->insert([
            'r_name' => "Blogger"
        ]);
        DB::table('roles')->insert([
            'r_name' => "Admin"
        ]);
    }
}
