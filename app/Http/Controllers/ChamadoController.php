<?php

namespace App\Http\Controllers;

use App\Models\Chamado;
use Illuminate\Http\Request;

class ChamadoController extends Controller
{
    function index(Request $request){
        $numrat = $request->numrat;
        if(!is_numeric($numrat))
            return redirect()->route('chamados.dashboard');
        $chamado = Chamado::getChamado($numrat);
        if(!isset($chamado[0]))
            return redirect()->route('chamados.chamado', ['fallbackPlaceholder' => $numrat]);
        $status = 3;

        return view('chamados.chamado', compact('numrat', 'chamado', 'status'));
    }

    function create(){
        return view('chamados.novo');
    }
}
