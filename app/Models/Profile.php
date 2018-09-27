<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'tm_profile';

    protected $fillable = [
    	'user_id','fullname','address','gender'
    ];

    protected $dates = [
    	'created_at',
    	'updated_at'
    ];

    public function user()
    {
    	return $this->hasOne('App\Users','user_id');
    }
}
