<?php

namespace Database\Seeders;

use App\Models\staff;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {





        $a=0;
        $cheif=null;

        for($i=0;$i<5000;$i++){


            $randomDate = '2020-05-06';

            if($a==10){
                $cheif++;
                $a=0;
            }



            \DB::table('staff')->insert([

                'name' => str::random(7).' '.str::random(7).' '.str::random(7),
                'post' =>'Должность '.$i,
                'device_date'=>$randomDate,
                'salary'=>random_int(350,3000),
                'parent_id'=>$cheif,
            ]);
            $a++;
        }






    }
}
