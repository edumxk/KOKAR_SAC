<?php

namespace App\Http\Controllers;

use App\Models\CabFormulario;
use App\Models\Formulario;
use App\Models\ItemFormulario;
use Illuminate\Http\Request;
use App\Models\Protocolo;

class FormularioController extends Controller
{
    private $token;
    public function index()
    {
        $dados = CabFormulario::all();
            foreach ($dados as &$dado) {
                $dado->itemformulario = ItemFormulario::where('idformulario', $dado->id)->get();
            }

        return view('chamados.novo', compact('dados'));
    }

    public function store(Request $request)
    {
        if($request->input('_token') == $this->token){
            return redirect()->back()->with('error', 'Erro ao salvar formulário!');
        }
        $this->token = $request->input('_token');
        $form = new Formulario;

        $form->protocolo = (new Protocolo)->getProtocolo();
        $form->formulario = json_encode($request->all());

        //dd($form);
        $form->save();

        $this->token = $request->input('_token');
        return redirect()->back()->with('success', 'Formulário salvo com sucesso!');
    }
}
