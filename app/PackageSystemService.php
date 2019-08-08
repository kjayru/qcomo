<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageSystemService extends Model
{
    //
    protected $table = 'packages_system_services';

    public function package()
    {
        return $this->belongsTo('App\Package', 'package_id');
    }

    public function system_service()
    {
        return $this->belongsTo('App\SystemService', 'system_service_id');
    }
}
