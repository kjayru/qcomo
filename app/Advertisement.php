<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $fillable = [
        'title','url','image', 'empresa', 'costo','inicio','final', 'client_id',
     ];

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
