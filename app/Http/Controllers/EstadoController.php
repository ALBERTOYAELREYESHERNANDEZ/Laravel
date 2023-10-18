<?php

namespace App\Http\Controllers;
use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    public function show(string $id): View
    {
        // foreach (Estado::all() as $estado) {
        //     echo $estado->NOMBRE;
        // }
        echo "<B>", Estado::find($id)->nombre,"</B><br>";
        
    }

    public function index()
    {
        foreach(Estado::get() as $estado){
            // echo "<B>",$estado->NOMBRE,"</B><br>";
        //imprimir nombre y poblacion del estado en pantalla 
            echo "<B>" . $estado->NOMBRE . "</B>: " . $estado->POBLACION . "<br>";

        }
    }
}

// public class Confi getCasosConfirmados(){
//     $confirmados = Confirmado:all();
//     $totalCasos = $confirmados->sum('casos');

// echo "Casos confirmados:", $totalCasos;
// }

// public function show(){
//     self::getCasosConfirmadosEstado($idEstado){
//         $estado = Estado::find ($idEstado);
//         $casosEstados = $Confirmado::where('estado_id','=', $idEstado)
//         $totalCasos = $casosEstados ->sum('casos')
//     }
// }