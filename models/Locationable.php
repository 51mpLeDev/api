<?php

namespace Firdavs\Api\Models;

use Admin\Models\Tables_model;
use Illuminate\Database\Eloquent\Model;

class Locationable extends Model
{
    protected $table = 'locationables';

    public $timestamps = false;

    public static function getLocationTables($id)
    {
        $ids = static::where('location_id', $id)->where('locationable_type', 'tables')->get('locationable_id')->toArray();
        return Tables_model::whereIn('table_id', $ids)->get();
    }
}
