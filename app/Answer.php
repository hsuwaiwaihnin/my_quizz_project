<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillabe=[
    	'question_id','answer','status'
    ];
    public function question(){
    	return $this->belongsTo('App\Question');
    }
}
