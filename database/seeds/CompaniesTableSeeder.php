<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'kuma',
            'email' => 'kumasanno@gmail.com',
            'password' => Hash::make('kumasanno')
        ]);
    }
}
