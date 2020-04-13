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
            [
                'department_id' => '1',
                'name' => '一課'
            ],[
                'department_id' => '1',
                'name' => '二課'
            ],[
                'department_id' => '1',
                'name' => '三課'
            ],[
                'department_id' => '2',
                'name' => '一課'
            ],[
                'department_id' => '2',
                'name' => '二課'
            ],[
                'department_id' => '2',
                'name' => '三課'
            ],[
                'department_id' => '3',
                'name' => '一課'
            ],[
                'department_id' => '3',
                'name' => '二課'
            ],[
                'department_id' => '3',
                'name' => '三課'
            ]
        ]);
    }
}
