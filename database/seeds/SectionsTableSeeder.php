<?php

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sections')->delete();
        
        \DB::table('sections')->insert(array (

            0 => 
            array (
                'id' => 1,
                'name' => 'service section 1',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Background Image","type":"attachment","alias":"background_image"},{"name":"Title","type":"text","alias":"title"},{"name":"Column 1","type":"editor","alias":"column_1"},{"name":"Column 2","type":"editor","alias":"column_2"},{"name":"Column 3","type":"editor","alias":"column_3"}],"data":[{"background_image":"18","title":"Why Choose Us","column_1":"<div class=\"content\">\n<h3>Superior Service</h3>\n\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\n</div>\n","column_2":"<div class=\"content\">\n<h3>Strong Commitment To Customers</h3>\n\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\n</div>\n","column_3":"<div class=\"content\">\n<h3>Comprehensive, Innovative Solutions</h3>\n\n<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\n</div>\n"}]}',
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
                'deleted_at' => NULL
            )
        ));
        
        
    }
}