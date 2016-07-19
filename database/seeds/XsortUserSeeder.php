<?php

use Illuminate\Database\Seeder;

class XsortUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'           => "Xsort",
            'email'          => "support@xsort.md",
            'password'       => bcrypt('expedition'),
            'rights'         => 1
        ]);
    }
}
