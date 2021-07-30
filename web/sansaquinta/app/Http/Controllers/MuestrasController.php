<?php

namespace App\Http\Controllers;
use App\Models\Registro;
use Illuminate\Http\Request;

class MuestrasController extends Controller
{
    //
    public function getRegistro(){
        $registros = Registro::all();
        return $registros;
    }

    public function crearRegistro(Request $request){
        $input = $request->all();
        $registro = new Registro();
        $registro->fecha = $input["fecha"];
        $registro->hora = $input["hora"];
        $registro->medidor = $input["medidor"];
        $registro->valor = $input["valor"];
        $registro->save();
        return $registro;
    }

    public function eliminarRegistro(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $registro = Registro::findOrFail($id);
        $registro->delete();
        return "ok";
    }

    public function filtrarRegistro(Request $request){
        $input = $request->all();
        $filtro = $input["filtro"];
        $registro = Registro::where("medida", $filtro)->get();
        retur $registros;
    }
}
