<?php

namespace vk2\paineladmin\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Navgroupmenustyle extends Model
{
    protected $table = 'vpr_nav_group_menu_style';
    protected $primaryKey = 'id_menu_style';
    protected $fillable = ['id_menu', 'id_style'];
}
