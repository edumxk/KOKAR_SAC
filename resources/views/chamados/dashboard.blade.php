@extends('components.header')

@section('content')
    <div class="container-fluid">
        <div class="row">


        @forelse($chamados as $c)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $c->nome }}</h5>
                    <p class="card-text">{{ $c->cargo }}</p>
                    <p class="card-text">{{ $c->setor }}</p>
                    <a href="#" class="btn btn-primary">Ver</a>
                    <button class="btn btn-danger">Editar</button>
                </div>
            </div>
        @empty
            <p>Não há chamados</p>
        @endforelse

    </div>
@endsection

