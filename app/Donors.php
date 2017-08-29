<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donors extends Model
{
    protected $table = 'donors';
    protected $primaryKey = 'donor_id';
    public $timestamps = false;
    protected $fillable = [
        'donor_id',
        'donor_first_name',
        'donor_last_name',
        'donor_company',
        'donated',
        'donation_quantity',
        'donated_at'
    ];
    

    public function getfnameAttribute($donor_first_name)
    {
        return ucfirst($donor_first_name);
    }

     public function getlnameAttribute($donor_last_name)
    {
        return ucfirst($donor_last_name);
    }

    public function getcompanyAttribute($donor_company)
    {
        return ucfirst($donor_company);
    }

    public function getdonatedAttribute($donated)
    {
        return ucfirst($donated);
    }

    public function getqtyAttribute($donation_quantity)
    {
        return ucfirst($donation_quantity);
    }
    
    public function getdonateAttribute($donated_at)
    {
        return ucfirst($donated_at);
    }


}
