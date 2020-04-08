<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('departments')->insert([
            [
                'office_id' => '1',
                'name' => '営業部',
            ],[
                'office_id' => '1',
                'name' => '経理部'
            ],[
                'office_id' => '1',
                'name' => '総務部'
            ],[
                'office_id' => '1',
                'name' => '技術部'
            ],[
                'office_id' => '2',
                'name' => '営業部',
            ],[
                'office_id' => '2',
                'name' => '経理部'
            ],[
                'office_id' => '2',
                'name' => '総務部'
            ],[
                'office_id' => '2',
                'name' => '技術部'
            ],[
                'office_id' => '3',
                'name' => '営業部',
            ],[
                'office_id' => '3',
                'name' => '経理部'
            ],[
                'office_id' => '3',
                'name' => '総務部'
            ],[
                'office_id' => '3',
                'name' => '技術部'
            ]
        ]);
    }
}
