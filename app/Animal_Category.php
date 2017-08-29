<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal_Category extends Model
{
    protected $table = 'animal_category';
    protected $primaryKey = 'category_id';
    public $timestamps = false;

    protected $fillable = [
    	'category_id',
    	'category_type'
    ];

    public function getcategorytypeAttribute($category_type)
    {
    	return ucfirst($category_type);
    }
}
