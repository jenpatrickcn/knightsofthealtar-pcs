<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Jen Patrick',
            'last_name' => 'Concon',
            'rank' => 'Junior Knight Cadet',
            'email' => 'jenpatrickconcon@gmail.com',
            'password' => bcrypt('123456'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        $faker = Faker::create();
    	foreach (range(1,50) as $index) {
	        DB::table('users')->insert([
	            'first_name' => $faker->firstName,
	            'last_name' => $faker->lastName,
	            'rank' => 'Knight',
	            'email' => $faker->email,
	            'password' => bcrypt('secret'),
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        ]);
	    }
    }
}
