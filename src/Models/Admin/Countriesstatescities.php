<?php

namespace vk2\paineladmin\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Countriesstatescities extends Model
{
    protected $table = 'vpr_countries_states_cities';
    protected $primaryKey = 'id_city';
    protected $fillable = ['id_state', 'name'];
}
