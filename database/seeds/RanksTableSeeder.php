<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ranks')->insert(['name' => 'Apprentice' , 'created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('ranks')->insert(['name' => 'Page' , 'created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('ranks')->insert(['name' => 'Knight' , 'created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('ranks')->insert(['name' => 'Knight Commander' , 'created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('ranks')->insert(['name' => 'Grand Knight' , 'created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('ranks')->insert(['name' => 'Junior Knight Cadet' , 'created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('ranks')->insert(['name' => 'Senior Knight Cadet' , 'created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('ranks')->insert(['name' => 'Knight Graduate' , 'created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
    }
}
