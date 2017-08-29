<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal_Service_Type extends Model
{
    protected $table = 'animal_service_type';
    protected $primaryKey = 'service_id';
    public $timestamps = false;
    protected $fillable = [
    	'service_id',
    	'service_type'
    ];

    public function gettypeAttribute($service_type)
    {
    	return ucfirst($service_type);
    }
}
