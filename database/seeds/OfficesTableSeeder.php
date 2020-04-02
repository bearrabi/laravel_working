<?php

use Illuminate\Database\Seeder;

class OfficesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('offices')->insert([
            'name' => 'kuma',
            'email' => 'kumasanno@gmail.com',
            'password' => Hash::make('kumasanno')
        ]);
    }
}
