<?php

namespace App\Http\Controllers;

use App\Models\Chamado;
use Illuminate\Http\Request;

class ChamadoController extends Controller
{
    function index(Request $request){
        $numrat = $request->numrat;
        $usuario['tema'] = 'dark';
        $chamado = Chamado::getChamado($numrat);
        $status = 3;

        return view('chamados.chamado', compact('numrat', 'usuario', 'chamado', 'status'));
    }
}
