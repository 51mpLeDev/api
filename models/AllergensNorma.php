<?php

namespace Firdavs\Api\Models;

use Admin\Models\Allergens_model;
use Illuminate\Database\Eloquent\Model;

class AllergensNorma extends Model
{
    protected $table = 'allergens_norma';
    public $timestamps = false;
    protected $primaryKey = 'allergens_norma_id';

    public function allergen()
    {
        return $this->belongsTo(Allergens_model::class, 'allergen_id', 'allergen_id');
    }
}
