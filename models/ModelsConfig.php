<?php

namespace Firdavs\Api\Models;

use Admin\Models\Locations_model;
use Admin\Models\Staffs_model;
use Illuminate\Database\Eloquent\Model;

class ModelsConfig extends Model
{
    protected $table = 'models_config';

    protected $primaryKey = 'model_config_id';

    public $timestamps = false;

    public function staff()
    {
        return $this->belongsTo(Staffs_model::class, 'staff_id', 'staff_id');
    }

    public function location()
    {
        return $this->belongsTo(Locations_model::class, 'location_id', 'location_id');
    }
}
