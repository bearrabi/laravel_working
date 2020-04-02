<?php

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            'name' => 'kuma',
            'email' => 'kumasanno@gmail.com',
            'password' => Hash::make('kumasanno')
        ]);
    }
}
