<?php

use Illuminate\Database\Seeder;

class PageSectionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_section')->delete();
    

        \DB::table('page_section')->insert(array (
            0 => 
            array (
                'id' => 1,
                'page_id' => 9,
                'section_id' => 1,
                'order' => 1
            )
        ));
        
        
    }
}