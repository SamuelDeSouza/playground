<?php

namespace vk2\paineladmin\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Navgroupmenu extends Model
{
    protected $table = 'vpr_nav_group_menu';
    protected $primaryKey = 'id_nav_group_menu';
    protected $fillable = ['id_group', 'name', 'link', 'visible'];
}
