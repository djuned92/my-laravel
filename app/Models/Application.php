<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = 'application';

    protected $fillable = [
    	'name',
    	'company',
    	'logo',
    	'logo_mini',
    	'logo_large',
    	'theme'
    ];

    protected $dates = [
    	'created_at',
    	'updated_at'
    ];
}
