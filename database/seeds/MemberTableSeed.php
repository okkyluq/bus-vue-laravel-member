<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Member;

class MemberTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker  = Factory::create();

        for ($i=0; $i<100; $i++) { 
        	Member::create([
        		'nama' => $faker->name,
        		'alamat' => $faker->address
        	]);
        }

    }
}
