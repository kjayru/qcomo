<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SystemService extends Model
{
    //
    protected $table = 'system_services';

    public function packageSystemServices()
    {
        return $this->hasMany('App\PackageSystemService', 'system_service_id');
    }
}
