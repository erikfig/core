<?php

namespace App\Http\Controllers;

use App\SensorAgua as Sensor;
use Illuminate\Http\Request;

class SensoresAguaController extends Controller
{
    public function agora()
    {
        $result = Sensor::orderBy('dia_hora', 'DESC')->first();
        return view('sensores.agora', compact('result'));
    }

    public function ultimosTrintaDias()
    {
        $ultimosTrintaDias = today();
        $ultimosTrintaDias->subDays(30);

        $result = Sensor::where('dia_hora', '>=', $ultimosTrintaDias)
            ->orderBy('dia_hora', 'DESC')
            ->limit(50)
            ->get();
        return view('sensores.ultimos_trinta_dias', compact('result'));
    }
}
