<?php

namespace Firdavs\Api\Models;

use Admin\Models\Orders_model;
use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    protected $table = 'checks';
    public $timestamps = false;
    protected $primaryKey = 'check_id';
    public function orders()
    {
        return Orders_model::whereIn('order_id', $this->orders_ids)->get();
    }

    public function main_order()
    {
        return $this->orders()->where('parent_id', 0)->first();
    }
}
