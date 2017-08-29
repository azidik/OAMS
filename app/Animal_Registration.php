<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal_Registration extends Model
{
    protected $table = 'animal_registration';
    protected $primaryKey = 'reg_animal_id';
    public $timestamps = false;
    protected $fillable = [
    	'reg_animal_id',
    	'reg_animal_name',
    	'reg_animal_species',
    	'reg_animal_breed',
    	'reg_animal_age',
    	'reg_animal_geder',
    	'reg_animal_color',
    	'reg_owner'
    ];

    public function getregnameAttribute($reg_animal_name)
    {
    	return ucfirst($reg_animal_name);
    }

    public function getregageAttribute($reg_animal_age)
    {
    	return ucfirst($reg_animal_age);
    }

    public function getreggenderAttribute($reg_animal_gender)
    {
    	return ucfirst($reg_animal_gender);
    }

    public function getregspeciesAttribute($reg_animal_species)
    {
    	return ucfirst($reg_animal_species);
    }

    public function getregbreedAttribute($reg_animal_breed)
    {
    	return ucfirst($reg_animal_breed);
    }

    public function getregcolorAttribute($reg_animal_color)
    {
    	return ucfirst($reg_animal_color);
    }

    public function user()
    {
    	return $this->belongsTo('App\User_Account', 'reg_owner', 'user_id');
    }

}
