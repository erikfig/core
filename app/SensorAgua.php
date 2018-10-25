<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SensorAgua extends Model
{
    protected $table = 'sensores_agua';

    public function acesso() {
        return $this->belongsTo(Acesso::class, 'acesso_id');
    }
}
