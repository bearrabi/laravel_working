<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
            'password' => Hash::make('kumasanno'),
        ],
        [
            'name' => 'bearrabi',
            'email' => 'bearrabi0506@gmail.com',
            'password' => Hash::make('bearrabi'),
        ]);
    }
}
