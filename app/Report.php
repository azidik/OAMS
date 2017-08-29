<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'report';
    protected $primaryKey = 'report_id';
    public $incrementing = false;
    protected $fillable = [
    	'report_id',
    	'report_category',
    	'report_count'
    ];

    public function getcatAttribute($report_category)
    {
    	return ucfirst('report_category');
    }

    public function getcountAttribute($report_count)
    {
    	return ucfirst('report_count');
    }
}
