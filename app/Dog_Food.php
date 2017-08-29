<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog_Food extends Model
{
    protected $table = 'dog_food';
    protected $primaryKey = 'dog_id';
    public $timestamps = false;
    protected $fillable = [
    	'dog_id',
    	'dfood_category',
    	'dfood_quantity',
    	'dfood_expiry'
    ];

    public function getdfoodcategAttribute($dfood_category)
    {
    	return ucfirst($dfood_category);
    }

    public function getdfoodqtyAttribute($dfood_quantity)
    {
    	return ucfirst($dfood_quantity);
    }

    public function getdfoodexpAttribute($food_expiry)
    {
    	return ucfirst($dfood_expiry);
    }
}
