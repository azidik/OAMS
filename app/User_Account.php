<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User_Account extends Model
{
    use Notifiable;
    protected $table = 'user_account';
    protected $primaryKey = 'user_id';
    public $timestamps = false;

    protected $fillable = [
    	'user_id',
    	'username',
    	'password',
    	'first_name',
    	'last_name',
    	'email',
    	'address',
    	'contact_no'
    ];

    public function getusernameAttribute($username)
    {
    	return ucfirst($username);
    }

    public function getpasswordAttribute($password)
    {
    	return ucfirst($password);
    }

    public function getfirst_nameAttribute($first_name)
    {
    	return ucfirst($first_name);
    }

    public function getlast_nameAttribute($last_name)
    {
    	return ucfirst($last_name);
    }

    public function getemailAttribute($email)
    {
    	return ucfirst($email);
    }

    public function getaddressAttribute($address)
    {
    	return ucfirst($address);
    }

    public function getcontact_noAttribute($contact_no)
    {
    	return ucfirst($contact_no);
    }


    public function animal_registration()
    {
    	return $this->hasMany('cebupound\Animal_Registration','animal_owner');
    }
}
