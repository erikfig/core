<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SensorAgua extends Model
{
    protected $table = 'sensores_agua';

    protected $fillable = ['dia_hora', 'estado', 'acesso_id'];

    protected $dates = ['dia_hora'];

    public function acesso() {
        return $this->belongsTo(Acesso::class, 'acesso_id');
    }
}
