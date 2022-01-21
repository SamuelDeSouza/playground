<?php

namespace samueldesouza\playground\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Navgroupmenuchildren extends Model
{
    protected $table = 'vpr_nav_group_menu_children';
    protected $primaryKey = 'id_menu_children';
    protected $fillable = ['id_menu', 'name', 'link', 'default'];
}
