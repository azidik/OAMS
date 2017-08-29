<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Impounding_Request extends Model
{
    protected $table = 'impounding_request';
    protected $primaryKey = 'imp_id';
    public $timestamps = false;
    protected $fillable = [
        'imp_id',
        'impounding_category',
        'impounding_species',
        'impounding_breed',
        'impounding_age',
        'impounding_gender',
        'impounding_color',
        'place_found',
        'impounded_by',
        'imp_requestDate'
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
        

    public function getimpoundfoundAttribute($place_found)
    {
        return ucfirst($place_found);
    }

    public function impoundedby()
    {
        return $this->belongsTo('App\user_account', 'impounded_by', 'user_id');
    }

    public function getimpdateAttribute($imp_requestDate)
    {
        return ucfirst($imp_requestDate);
    }

}
