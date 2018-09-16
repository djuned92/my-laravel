<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Privilege extends Model
{
    protected $table = 'app_privilege';

    protected $fillable = [
    	'can_create',
    	'can_read',
    	'can_update',
    	'can_delete'
    ];

    protected $dates = [
    	'created_at',
    	'updated_at'
    ];

    public function role()
    {
    	return $this->belongsTo(Role::class,'role_id');
    }

    public function menu()
    {
    	return $this->belongsTo(Menu::class,'menu_id');
    }

}
