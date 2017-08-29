<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        //$this->call(user_accountTableSeeder::class);
        //$this->call(animal_registrationTableSeeder::class);
        //$this->call(animal_listTableSeeder::class);
        //$this->call(animal_categoryTableSeeder::class);
        //$this->call(animal_impoundingTableSeeder::class);
        //$this->call(animal_for_adoptionTableSeeder::class);
    	//$this->call(animal_service_typeTableSeeder::class);
    	//$this->call(get_serviceTableSeeder::class);
    	//$this->call(animal_scheduleTableSeeder::class);
        //$this->call(admin_accountTableSeeder::class);
        //$this->call(donorsTableSeeder::class);
        //$this->call(dog_foodTableSeeder::class);
        //$this->call(cat_foodTableSeeder::class);
        //$this->call(reportTableSeeder::class);
        //$this->call(animal_adoptionTableSeeder::class);
        //$this->call(registration_requestTableSeeder::class);
        //$this->call(impounding_requestTableSeeder::class);
        $this->call(adoption_requestTableSeeder::class);
        
    }
}
