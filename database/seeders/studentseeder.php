<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\student;

class studentseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table ('students') -> truncate();
        $faker = \Faker\Factory::create();
        foreach(range(1,10) as $index){

            student::create([
                'nama' => $faker -> name,
                'alamat' => $faker -> address,
                'nombortelefon' => $faker -> phoneNumber,
                'nomboric' => $faker -> randomNumber($nbDigits = NULL, $strict = false),
                'nomborpelajar' => $faker -> randomNumber,
                'bidang' => $faker -> word,
                'tarikhmula' => $faker -> dateTime,
                'tarikhtamat' => $faker -> dateTime,
                'penempatan' => $faker -> text,
                'email' => $faker -> email
    
            ]);

        }
    }
}
