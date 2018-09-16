<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'tm_role';

    protected $fillable = [
    	'name'
    ];

    protected $dates = [
    	'created_at',
    	'updated_at',
    	'deleted_at'
    ];

    public function privileges()
    {
    	return $this->hasMany(Privilege::class, 'role_id');
    }
}
