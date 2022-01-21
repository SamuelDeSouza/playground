<?php

namespace vk2\paineladmin\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Liststyle extends Model
{
    protected $table = 'vpr_list_style';
    protected $primaryKey = 'id_style';
    protected $fillable = ['name', 'file'];
}
