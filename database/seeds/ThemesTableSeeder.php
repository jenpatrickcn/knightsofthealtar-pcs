<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ThemesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('themes')->insert([
        	'theme_name' => 'Default',
        	'bootstrap_src' => '/vendor/bootstrap/css/bootstrap.min.css' , 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('themes')->insert([
        	'theme_name' => 'Cerulean',
        	'bootstrap_src' => 'https://bootswatch.com/4/cerulean/bootstrap.min.css' , 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('themes')->insert([
        	'theme_name' => 'Cosmo',
        	'bootstrap_src' => 'https://bootswatch.com/4/cosmo/bootstrap.min.css' , 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('themes')->insert([
        	'theme_name' => 'Cyborg',
        	'bootstrap_src' => 'https://bootswatch.com/4/cyborg/bootstrap.min.css' , 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('themes')->insert([
        	'theme_name' => 'Cerulean',
        	'bootstrap_src' => 'https://bootswatch.com/4/cerulean/bootstrap.min.css' , 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('themes')->insert([
        	'theme_name' => 'Darkly',
        	'bootstrap_src' => 'https://bootswatch.com/4/darkly/bootstrap.min.css' , 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('themes')->insert([
        	'theme_name' => 'Flatly',
        	'bootstrap_src' => 'https://bootswatch.com/4/flatly/bootstrap.min.css' , 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('themes')->insert([
        	'theme_name' => 'Journal',
        	'bootstrap_src' => 'https://bootswatch.com/4/journal/bootstrap.min.css' , 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('themes')->insert([
        	'theme_name' => 'Litera',
        	'bootstrap_src' => 'https://bootswatch.com/4/litera/bootstrap.min.css' , 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('themes')->insert([
        	'theme_name' => 'Lumen',
        	'bootstrap_src' => 'https://bootswatch.com/4/lumen/bootstrap.min.css' , 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('themes')->insert([
        	'theme_name' => 'Lux',
        	'bootstrap_src' => 'https://bootswatch.com/4/lux/bootstrap.min.css' , 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('themes')->insert([
        	'theme_name' => 'Materia',
        	'bootstrap_src' => 'https://bootswatch.com/4/materia/bootstrap.min.css' , 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('themes')->insert([
        	'theme_name' => 'Minty',
        	'bootstrap_src' => 'https://bootswatch.com/4/minty/bootstrap.min.css' , 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('themes')->insert([
        	'theme_name' => 'Pulse',
        	'bootstrap_src' => 'https://bootswatch.com/4/pulse/bootstrap.min.css' , 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('themes')->insert([
        	'theme_name' => 'Sandstone',
        	'bootstrap_src' => 'https://bootswatch.com/4/sandstone/bootstrap.min.css' , 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('themes')->insert([
        	'theme_name' => 'Simplex',
        	'bootstrap_src' => 'https://bootswatch.com/4/simplex/bootstrap.min.css' , 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('themes')->insert([
        	'theme_name' => 'Sketchy',
        	'bootstrap_src' => 'https://bootswatch.com/4/sketchy/bootstrap.min.css' , 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('themes')->insert([
        	'theme_name' => 'Slate',
        	'bootstrap_src' => 'https://bootswatch.com/4/slate/bootstrap.min.css' , 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('themes')->insert([
        	'theme_name' => 'Solar',
        	'bootstrap_src' => 'https://bootswatch.com/4/solar/bootstrap.min.css' , 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('themes')->insert([
        	'theme_name' => 'Spacelab',
        	'bootstrap_src' => 'https://bootswatch.com/4/spacelab/bootstrap.min.css' , 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('themes')->insert([
        	'theme_name' => 'Superhero',
        	'bootstrap_src' => 'https://bootswatch.com/4/superhero/bootstrap.min.css' , 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('themes')->insert([
        	'theme_name' => 'United',
        	'bootstrap_src' => 'https://bootswatch.com/4/united/bootstrap.min.css' , 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('themes')->insert([
        	'theme_name' => 'Yeti',
        	'bootstrap_src' => 'https://bootswatch.com/4/yeti/bootstrap.min.css' , 
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
