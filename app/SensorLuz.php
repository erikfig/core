<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SensorLuz extends Model
{
    protected $table = 'sensores_luz';
    
    public function acesso() {
        return $this->belongsTo(Acesso::class, 'acesso_id');
    }
}
