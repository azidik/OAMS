<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adoption_Request extends Model
{
    protected $table = 'adoption_request';
   protected $primaryKey = 'adopt_id';
   protected $fillable = [
   		'adopt_id',
   		'adopt_first_name',
   		'adopt_last_name',
   		'adopted',
   		'adopt_requestDate'
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

   public function getadoptdateAttribute($adopt_requestDate)
   {
      return ucfirst($adopt_requestDate);
   }
}
