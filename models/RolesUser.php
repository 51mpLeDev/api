<?php

namespace Firdavs\Api\Models;

use Admin\Models\Users_model;
use Illuminate\Database\Eloquent\Model;
use System\Models\Roles_model;

class RolesUser extends Model
{
    public $timestamps = false;
    public $table = 'roles_users';
    protected $guarded = false;

    public function role(){
        return $this->belongsTo(Roles_model::class, 'role_id', 'id');
    }
    public function user(){
        return $this->belongsTo(Users_model::class, 'user_id', 'user_id');
    }
}
