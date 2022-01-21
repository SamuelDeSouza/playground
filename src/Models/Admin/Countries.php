<?php

namespace samueldesouza\playground\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    protected $table = 'vpr_countries';
    protected $primaryKey = 'id_country';
    protected $fillable = ['name'];
}
