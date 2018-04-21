<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Department;
use App\Art;
use App\Collection;
use App\User;
class DatabaseSeeder extends Seeder
{
	private $collections = ['portrait', 'colorfull', 'dark', 'trees', 'people'];
	private $departments = ['painting', 'applied art', 'sculpture', 'others'];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

    	$faker = Factory::create();

    	foreach ($this->departments as $key => $department) {
    		Department::create([
    			'name' => $department
    		]);
    	}
    	

    	foreach ($this->departments as $key => $department) {
    		for ($i=0; $i < 10; $i++) { 
    			echo $faker->name . PHP_EOL;

    			Arts::create([
    				'name'	=> $faker->word,
    				'medium'	=> $faker->word,
    				'department_id'	=> $faker->word,
    				'name'	=> $faker->word,
    				'name'	=> $faker->word,
				]);

    		}
    	}
    	
    	dd("END");
    }
}
