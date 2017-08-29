<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal_Impounding extends Model
{
    protected $table = 'animal_impounding';
    protected $primaryKey = 'impounding_id';
    public $timestamps = false;
    protected $fillable = [
        'impounding_id',
        'impounding_category',
        'impounding_species',
        'impounding_breed',
        'impounding_age',
        'impounding_gender',
        'impounding_color',
        'impounding_surrendered_at',
        'impounding_place_found',
        'impounded_by'
    ];
    

    public function category()
    {
        return $this->belongsTo('App\Animal_Category', 'impounding_category', 'category_id');
    }

    public function getimpoundspeciesAttribute($impounding_species)
    {
        return ucfirst($impounding_species);
    }

     public function getimpoundbreedAttribute($impounding_breed)
    {
        return ucfirst($impounding_breed);
    }

    public function getimpoundageAttribute($impounding_age)
    {
        return ucfirst($impounding_age);
    }

    public function getimpoundgenderAttribute($impounding_gender)
    {
        return ucfirst($impounding_gender);
    }

    public function getimpoundcolorAttribute($impounding_color)
    {
        return ucfirst($impounding_color);
    }
    
    public function getimpoundsurrenderedAttribute($impounding_surrendered_at)
    {
        return ucfirst($impounding_surrendered_at);
    }

    public function getimpoundfoundAttribute($impounding_place_found)
    {
        return ucfirst($impounding_place_found);
    }

    public function impoundedby()
    {
        return $this->belongsTo('App\user_account', 'impounded_by', 'user_id');
    }


}
