<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'tm_profile';

    protected $fillable = [
    	'fullname','address','gender'
    ];

    protected $dates = [
    	'created_at',
    	'updated_at'
    ];

    public function user()
    {
    	return $this->belongsTo(Users::class, 'user_id');
    }
}
