<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subject;

class Question extends Model

{
	
    protected $fillabe=[
    	'subject_id','name','status'
    ];

    public function subject(){
    	return $this->belongsTo('App\Subject');
    }

    public function answers(){
    	return $this->hasMany('App\Answer');
    }
}
