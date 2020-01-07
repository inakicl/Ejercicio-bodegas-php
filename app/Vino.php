<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vino extends Model
{
    public function bodega()
    {
        return $this->belongsTo('App\Bodega');
    }
}
