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
    	return $this->hasMany('App\Models\Menu','parent_id');
    }

    public function parent()
    {
    	return $this->belongsTo('App\Models\Menu', 'parent_id');
    }

    public function privileges()
    {
    	return $this->hasMany('App\Models\Privilege', 'menu_id');
    }

    public function scopeGetListMenus($query, $level, $parent_id)
    {
        $role_id = \Auth::id();
        // $role_id = 1;
        $q = $query->join('app_privilege as p','app_menu.id','=','p.menu_id')
            ->where([
                ['is_published','=','1'],
                ['level','=',$level],
                ['parent_id' ,'=',$parent_id],
                ['p.role_id','=',$role_id],
                ['p.can_read','=','1']
            ])
            ->orderBy('menu_order','asc')
            ->select('app_menu.*');

        return $q;
    }
}
