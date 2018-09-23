<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'app_menu';

    protected $fillable = [
    	'level',
        'parent_id',
    	'menu',
    	'link',
    	'is_published',
    	'menu_order',
    	'icon'
    ];

    protected $dates = [
    	'created_at',
    	'updated_at'
    ];

    public function children()
    {
    	return $this->hasMany(Menu::class,'parent_id');
    }

    public function parent()
    {
    	return $this->belongsTo(Menu::class, 'parent_id');
    }

    public function privileges()
    {
    	return $this->hasMany(Privilege::class, 'menu_id');
    }
}
