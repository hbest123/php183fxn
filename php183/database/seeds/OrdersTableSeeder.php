<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        for($i=0; $i<2; $i++)
        {
        	$data[] = [

        			'uid' => rand(1,10),
        			'sid' => rand(1,10),
        			'status'=>rand(1,10),
        			
                    
        	];

        	
        }
        \DB::table('order')->insert($data);
    }
}
