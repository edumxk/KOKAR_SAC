<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class IndexController extends Controller
{
    public function show($dados)
    {
        //pegar tambem o setor do usuario
        //
        $dados = User::where('id', $dados)->get()->firstOrFail();

        return view('chamados.dashboard', compact('dados'));
    }
}
