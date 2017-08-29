<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Get_Service extends Model
{
    protected $table = 'get_service';
    protected $primaryKey = 'get_id';
    public $timestamps = false;
    protected $fillable = [
    	'get_id',
    	'get_service_type',
    	'get_animal_name',
    	'get_owner'
    ];

    public function type()
    {
    	return $this->belongsTo('App\Animal_Service_Type', 'get_service_type', 'service_id');
    }

    public function animalname()
    {
    	return $this->belongsTo('App\Animal_Registration', 'get_animal_name', 'reg_animal_id');
    }

    public function animalowner()
    {
    	return $this->belongsTo('App\User_Account', 'get_owner','user_id');
    }
}
