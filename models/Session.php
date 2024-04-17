<?php

namespace Firdavs\Api\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $table = 'sessions';
    public $timestamps = false;
    protected $guarded = ['id'];
}
