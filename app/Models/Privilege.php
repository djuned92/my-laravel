<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Privilege extends Model
{
    protected $table = 'app_privilege';

    protected $fillable = [
    	'menu_id',
        'role_id',
        'can_create',
    	'can_read',
    	'can_update',
    	'can_delete'
    ];

    // protected $guarded = [];

    protected $dates = [
    	'created_at',
    	'updated_at'
    ];

    public function role()
    {
    	return $this->belongsTo('App\Models\Role','role_id');
    }

    public function menu()
    {
    	return $this->belongsTo('App\Models\Menu','menu_id');
    }

}
