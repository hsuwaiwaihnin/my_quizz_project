<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Subject;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function subjects(){
        return $this->belongsToMany('App\Subject','marks','user_id','subject_id')
        ->withPivot(['answer_date','total'])
        ->withTimestamps();
    }

    /*public function subjects(){
        return $this->belongsToMany('App\Subject','marks','subject_id','user_id');
            ->withPivot(['answerdate','total']),
            ->withTimestamps();
    }*/
}
