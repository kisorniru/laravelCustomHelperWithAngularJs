<?php

use Illuminate\Database\Seeder;

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
            'first_name' 	=> "Md. Noor-A-Alam",
            'last_name'		=> "Siddique",
            'email' 		=> 'admin@admin.com',
            'password' 		=> bcrypt('admin'),
        ]);

        $faker = Faker\Factory::create();

	    $limit = 10;

	    for ($i = 0; $i < $limit; $i++) {

	        DB::table('users')->insert([
	            'first_name' 	=> $faker->firstName,
	            'last_name' 	=> $faker->lastName,
	            'email' 		=> $faker->email,
	            'password' 		=> bcrypt('user')
	        ]);
	    }

    }
}
