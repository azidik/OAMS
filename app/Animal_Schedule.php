<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal_Schedule extends Model
{
    protected $table = 'animal_schedule';
    protected $primaryKey = null;
    public $timestamps = false;
    protected $fillable = [
    	'owner',
        'animal_name',
    	'type_of_service',
    	'schedule_date'
    ];

    public function animalowner()
    {
    	return $this->belongsTo('App\User_Account', 'owner', 'user_id');
    }
    
    public function animalname()
    {
    	return $this->belongsTo('App\Animal_Registration', 'animal_name', 'reg_animal_id');
    }

    public function type()
    {
    	return $this->belongsTo('App\Animal_Service_Type', 'type_of_service', 'service_id');
    }

    public function getscheduleAttribute($schedule_date)
    {
    	return ucfirst($schedule_date);
    }
}
