<?php

use Illuminate\Database\Seeder;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [];
        for($i=0; $i<2; $i++)
        {
        	$data[] = [

        			'uid' => rand(1,10),
        			'receive'=>str_random('aaa'),
        			'location'=>str_random('北京市昌平区育荣教育园区'),
                    'phone'=>'13467898765',
        			'created_at'=>date('Y-m-d H:i:s'),
        			'updated_at'=>date('Y-m-d H:i:s'),


        	];

        	
        }
        \DB::table('address')->insert($data);
    }
}
