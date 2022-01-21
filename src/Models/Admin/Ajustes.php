<?php

namespace samueldesouza\playground\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Ajustes extends Model
{
    protected $table = 'vpr_nav_group';
    protected $primaryKey = 'id_nav_group';
    protected $fillable = ['name', 'link', 'submenu'];
}
