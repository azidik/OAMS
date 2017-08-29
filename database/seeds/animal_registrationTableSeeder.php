<?php

use Illuminate\Database\Seeder;

class animal_registrationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $anireg = [[
        'reg_animal_name' => 'Forest',
        'reg_animal_age' => '1',
        'reg_animal_gender' => 'Male',
        'reg_animal_species' => 'Dog',
        'reg_animal_breed' => 'Dachshund mini-pincher',
        'reg_animal_color' => 'black-white-light brown',
        'reg_owner' => '2'
        ],
        [
        'reg_animal_name' => 'Jungle',
        'reg_animal_age' => '1',
        'reg_animal_gender' => 'Male',
        'reg_animal_species' => 'Dog',
        'reg_animal_breed' => 'Shih tzuh Poodle',
        'reg_animal_color' => 'black-white-dark brown',
        'reg_owner' => '2'
        ],
        [
        'reg_animal_name' => 'Ash',
        'reg_animal_age' => '2',
        'reg_animal_gender' => 'Female',
        'reg_animal_species' => 'Cat',
        'reg_animal_breed' => 'Ragdoll',
        'reg_animal_color' => 'black-white-dark brown',
        'reg_owner' => '4'
        ],
        [
        'reg_animal_name' => 'Presley',
        'reg_animal_age' => '4',
        'reg_animal_gender' => 'Male',
        'reg_animal_species' => 'Dog',
        'reg_animal_breed' => 'Poodle',
        'reg_animal_color' => 'white',
        'reg_owner' => '3'
        ],
        [
        'reg_animal_name' => 'Grim',
        'reg_animal_age' => '2',
        'reg_animal_gender' => 'Male',
        'reg_animal_species' => 'Cat',
        'reg_animal_breed' => 'Persian Cat',
        'reg_animal_color' => 'white',
        'reg_owner' => '5'
        ],
        [
        'reg_animal_name' => 'Sydney',
        'reg_animal_age' => '9',
        'reg_animal_gender' => 'Female',
        'reg_animal_species' => 'Dog',
        'reg_animal_breed' => 'Pekingese',
        'reg_animal_color' => 'white-light brown',
        'reg_owner' => '2'
        ],
        [
        'reg_animal_name' => 'Sheph',
        'reg_animal_age' => '1',
        'reg_animal_gender' => 'Male',
        'reg_animal_species' => 'Dog',
        'reg_animal_breed' => 'German Shepherd',
        'reg_animal_color' => 'dark brown-black',
        'reg_owner' => '5'
        ],
        [
        'reg_animal_name' => 'Cathy',
        'reg_animal_age' => '6',
        'reg_animal_gender' => 'Female',
        'reg_animal_species' => 'Cat',
        'reg_animal_breed' => 'Siamese Cat',
        'reg_animal_color' => 'black-dark brown',
        'reg_owner' => '3'
        ],
        [
        'reg_animal_name' => 'Bogs',
        'reg_animal_age' => '4',
        'reg_animal_gender' => 'Male',
        'reg_animal_species' => 'Dog',
        'reg_animal_breed' => 'Beagle',
        'reg_animal_color' => 'light brown-black',
        'reg_owner' => '4'
        ],
        [
        'reg_animal_name' => 'Ming',
        'reg_animal_age' => '1',
        'reg_animal_gender' => 'Female',
        'reg_animal_species' => 'Cat',
        'reg_animal_breed' => 'British Shorthair',
        'reg_animal_color' => 'Gray',
        'reg_owner' => '4'
        ],
        [
        'reg_animal_name' => 'Toney',
        'reg_animal_age' => '6',
        'reg_animal_gender' => 'Male',
        'reg_animal_species' => 'Cat',
        'reg_animal_breed' => 'Maine Coon',
        'reg_animal_color' => 'Gray-Black',
        'reg_owner' => '3'
        ],
        [
        'reg_animal_name' => 'Sugar',
        'reg_animal_age' => '3',
        'reg_animal_gender' => 'Female',
        'reg_animal_species' => 'Dog',
        'reg_animal_breed' => 'Siberian Husky',
        'reg_animal_color' => 'Ash Gray',
        'reg_owner' => '2'
        ],
        [
        'reg_animal_name' => 'Zeke',
        'reg_animal_age' => '5',
        'reg_animal_gender' => 'Male',
        'reg_animal_species' => 'Dog',
        'reg_animal_breed' => 'Golden Retriever',
        'reg_animal_color' => 'Golden Brown',
        'reg_owner' => '5'
        ],
        [
        'reg_animal_name' => 'Miggy',
        'reg_animal_age' => '4',
        'reg_animal_gender' => 'Male',
        'reg_animal_species' => 'Cat',
        'reg_animal_breed' => 'Dragon Li',
        'reg_animal_color' => 'Grayish',
        'reg_owner' => '3'
        ],
        [
        'reg_animal_name' => 'Gayoo',
        'reg_animal_age' => '1',
        'reg_animal_gender' => 'Female',
        'reg_animal_species' => 'Cat',
        'reg_animal_breed' => 'Norwegian Forest Cat',
        'reg_animal_color' => 'Grayish',
        'reg_owner' => '1'
        ],
        [
        'reg_animal_name' => 'Sponge',
        'reg_animal_age' => '4',
        'reg_animal_gender' => 'Female',
        'reg_animal_species' => 'Dog',
        'reg_animal_breed' => 'Chihuahua',
        'reg_animal_color' => 'Golden Brown',
        'reg_owner' => '4'
        ]];

        DB::table('animal_registration')->insert($anireg);
    }
}
