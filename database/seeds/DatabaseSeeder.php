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
	private $userIndex = 1;
	private $filenames = ['250x350.png',
							'250x350-2.png', 
							'350x250.png',
							'350x250-2.png', 
							'350x150.png',
							'350x150-2.png', 
							'550x250.png',
							'550x250-2.png', 
							'300x300.png',
							'300x300-2.png'];


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
    	foreach ($this->collections as $key => $collection) {
    		Collection::create([
    			'name' => $collection
    		]);
    	}
    	
    	
    	for ($i=0; $i < 40; $i++) {
    		User::create([
    			'name' 	=>	$faker->name,
    			'email' 	=>	$faker->email,
    			'password' 	=>	bcrypt('123456'),
    		]);
    	} 
    	
    	
    	foreach ($this->departments as $key => $department) {
    		//echo ($key + 1) . PHP_EOL;
    		
    		for ($i=0; $i < 10; $i++) { 
    			echo $faker->name . PHP_EOL;

    			Art::create([
    				'name'			=> $faker->sentence(2),
    				'img'			=> $this->filenames[$i],
    				'medium'		=> 'canvas',
    				'department_id'	=> $key + 1,
    				'user_id'		=> $this->userIndex,
    				'dimension'		=> '18.0 x 24.0',
				]);
 				
 				$this->userIndex ++;
    		}
    	}
    	
    	dd("END");
    }
}
