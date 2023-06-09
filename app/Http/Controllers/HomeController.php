<?php

namespace App\Http\Controllers;

use App\Models\Chamado;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $perPage = 30;

        $page = request()->get('page', 1);
        $offset = ($page - 1) * $perPage;
        $search = mb_strtoupper(request()->get('search'));

        $query = Chamado::getChamadosBusca($search);

        $total =  $query->count();

        $results = $query->skip($offset)->take($perPage)->get();

        $paginator = new LengthAwarePaginator($results, $total, $perPage, $page);
        $paginator->setPath('/dashboard');
        $paginator->appends(['search' => $search]); // Adiciona o parâmetro 'search' à paginação

        $chamados = $results;

        return view('chamados.dashboard', compact('chamados', 'search', 'paginator', 'perPage'));
    }

    public function teste()
    {
        $usuario = ['tema' => 'dark'];
        return view('dashboard', compact( 'usuario'));
    }
}
