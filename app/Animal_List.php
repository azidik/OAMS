<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal_List extends Model
{
    protected $table = 'animal_list';
    protected $primaryKey = 'list_id';
    public $timestamps = false;
    protected $fillable = [
    	'list_id',
    	'list_name',
    	'list_owner'
    ];

    public function animalname()
    {
    	return $this->belongsTo('App\Animal_Registration','list_name', 'reg_animal_id');
    }

    public function animalowner()
    {
        return $this->belongsTo('App\user_account', 'list_owner', 'user_id');
    }
}
