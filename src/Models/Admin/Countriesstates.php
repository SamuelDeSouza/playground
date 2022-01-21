<?php

namespace vk2\paineladmin\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Countriesstates extends Model {
    protected $table = 'vpr_countries_states';
    protected $primaryKey = 'id_state';
    protected $fillable = ['id_country', 'name', 'uf'];

}
