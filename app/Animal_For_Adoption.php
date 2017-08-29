<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal_For_Adoption extends Model
{
    protected $table = 'animal_impounding';
    protected $primaryKey = 'impounding_id';
    public $timestamps = false;
    protected $fillable = [
    	'impounding_id',
    	'impounding_species',
    	'impounding_breed',
    	'impounding_age',
    	'impounding_gender',
    	'impounding_color'
    ];

    public function getimpspeciesAttribute($impounding_species)
    {
    	return ucfirst($impounding_species);
    }

    public function getimpbreedAttribute($impounding_breed)
    {
        return ucfirst($impounding_breed);   
    }

    public function getimpageAttribute($impounding_age)
    {
        return ucfirst($impounding_age);
    }

    public function getimpgenderAttribute($impounding_gender)
    {
        return ucfirst($impounding_gender);
    }

    public function getimpcolorAttribute($impounding_color)
    {
        return ucfirst($impounding_color);
    }

}
