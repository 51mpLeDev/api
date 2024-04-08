<?php

namespace Firdavs\Api\Models;

use Admin\Models\Locations_model;
use Admin\Models\Tables_model;
use Illuminate\Database\Eloquent\Model;

class TableQRCode extends Model
{
    protected $primaryKey = 'table_qr_code_id';
    public $timestamps = false;

    public $appends = ['location'];
    public function table()
    {
        return $this->belongsTo(Tables_model::class, 'table_id', 'table_id');
    }

    public function location()
    {
        $locationable = Locationable::where('locationable_type', 'table')->where('locationable_id', $this->table_id)->first();
        return $this->location = Locations_model::where('location_id', $locationable->location_id)->first();
    }
}
