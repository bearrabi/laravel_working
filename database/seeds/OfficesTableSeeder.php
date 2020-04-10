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
            [
                'company_id' => 1,
                'name' => 'クマ支社',
                'post_number' =>'123-4567',
                'address' =>'bear県kuma市サケ町123番地4',
                'telnumber' => '09098989898',
            ],[
                'company_id' => 1,
                'name' => 'ウサギ支社',
                'post_number' =>'789-1234',
                'address' =>'rabi県usagi市ninnjin町5番地67',
                'telnumber' => '09093939393',
            ],[
                'company_id' => 1,
                'name' => 'タヌキ支社',
                'post_number' =>'456-7890',
                'address' =>'tanu県udon市kusa町2番地34',
                'telnumber' => '09005050505',
            ]
        ]);
    }
}
