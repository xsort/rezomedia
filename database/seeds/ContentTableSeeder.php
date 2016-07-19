<?php

use Illuminate\Database\Seeder;

class ContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('content')->insert([
            'name'           => str_random(10),
            'description'    => str_random(800),
            'slug'              => "test",
            'enabled'           => true
        ]);
    }
}
