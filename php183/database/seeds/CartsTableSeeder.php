<?php

use Illuminate\Database\Seeder;

class CartsTableSeeder extends Seeder
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
        			'count'=>rand(1,10),
                    'color'=>'black',
        			'price'=>rand(1,10),
                    'weight'=>rand(1,10),
        	];

        	
        }
        \DB::table('cart')->insert($data);
    }
}
