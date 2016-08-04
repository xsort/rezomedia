<?php

use Illuminate\Database\Seeder;

class RezomediaUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'           => "Rezomedia",
            'email'          => "info@rezomedia.md",
            'password'       => bcrypt('Rezomed030816'),
            'rights'         => 1
        ]);
    }
}
