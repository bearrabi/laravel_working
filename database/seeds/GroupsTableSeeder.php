<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('groups')->insert([
            'name' => 'kuma',
            'email' => 'kumasanno@gmail.com',
            'password' => Hash::make('kumasanno')
        ]);
    }
}
