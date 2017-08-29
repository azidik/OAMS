<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal_Adoption extends Model
{
   protected $table = 'animal_adoption';
   protected $primaryKey = 'adoption_id';
   protected $fillable = [
   		'adoption_id',
   		'adopt_first_name',
   		'adopt_last_name',
   		'adopted',
   		'adopted_at'
   ];

   public function adoptfn()
   {
   		return $this->belongsTo('App\user_account', 'adopt_first_name', 'user_id');
   }

   public function adoptln()
   {
   		return $this->belongsTo('App\user_account', 'adopt_last_name', 'user_id');
   }

   public function adoptani()
   {
   		return $this->belongsTo('App\animal_impounding', 'adopted', 'impounding_id');
   }

   public function getadoptedatAttribute($adopted_at)
   {
      return ucfirst($adopted_at);
   }
}
