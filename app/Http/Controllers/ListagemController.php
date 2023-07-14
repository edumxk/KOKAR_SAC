<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use Illuminate\Http\Request;

class ListagemController extends Controller
{
    public function index(){
        $chamados = (new Formulario)->all();
        return view('chamados.listagem', compact('chamados'));
    }

}
