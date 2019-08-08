<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function packageDetail()
    {
        return $this->hasOne('App\PackageDetail');
    }

    public function packageSystemServices()
    {
        return $this->hasMany('App\PackageSystemService');
    }
}
