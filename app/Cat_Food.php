<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat_Food extends Model
{
    protected $table = 'cat_food';
    protected $primaryKey = 'cat_id';
    public $timestamps = false;
    protected $fillable = [
    	'cat_id',
    	'cfood_category',
    	'cfood_quantity',
    	'cfood_expiry'
    ];

    public function getcfoodcategAttribute($cfood_category)
    {
    	return ucfirst($cfood_category);
    }

    public function getcfoodqtyAttribute($cfood_quantity)
    {
    	return ucfirst($cfood_quantity);
    }

    public function getcfoodexpAttribute($cfood_expiry)
    {
    	return ucfirst($cfood_expiry);
    }
}
