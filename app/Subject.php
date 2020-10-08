<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Subject extends Model
{
    protected $fillabe=[
    	'category_id','name','photo'
    ];
    protected $table='subjects';

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function questions(){
    	return $this->hasMany('App\Question');
    }

    public function users(){
    	return $this->belongsToMany('App\User','marks','user_id','subject_id')
    	->withPivot(['answer_date','total'])
    	->withTimestamps();
    }

    /*public function users(){
    	return $this->belongsToMany('App\User','marks','subject_id','user_id');
    	->withPivot(['answerdate','total']),
    	->withTimestamps();
    }*/

    
}
