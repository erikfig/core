<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acesso extends Model
{
    protected $table = 'acessos';

    public function sensoresAgua()
    {
        return $this->hasMany(SensorAgua::class, 'acesso_id');
    }

    public function sensoresLuz()
    {
        return $this->hasMany(SensorLuz::class, 'acesso_id');
    }
}
