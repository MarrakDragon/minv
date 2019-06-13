<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Asset extends Model
{
    public $table = 'assets';

    // Primary key setting
    public $primaryKey = 'id';

    public function location()
    {
        return $this->hasOne('App\Models\Location');
    }

}
