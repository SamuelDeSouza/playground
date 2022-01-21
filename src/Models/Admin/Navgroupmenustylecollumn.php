<?php

namespace samueldesouza\playground\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Navgroupmenustylecollumn extends Model
{
    protected $table = 'vpr_nav_group_menu_style_collumns';
    protected $primaryKey = 'id_menu_style_list';
    protected $fillable = ['id_menu_style', 'name', 'collumn', 'default', 'order', 'function', 'legenth', 'size'];
}
