<?php

namespace Firdavs\Api\Models;

use Admin\Models\Locations_model;
use Admin\Models\Tables_model;
use Illuminate\Database\Eloquent\Model;

class OrderTypes extends Model
{
    protected $primaryKey = 'order_type_id';
    public $timestamps = false;
    public $table = 'order_types';

}
