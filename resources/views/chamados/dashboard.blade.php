@extends('components.header')

@section('content')
    <div class="container-fluid border-1 border-success">
        <form class="form-inline" action="{{ route('chamados.dashboard') }}" method="GET">
            <div class="input-group d-flex justify-content-center">
                <input type="text" name="search" value="{{ $search }}" class="form-control" placeholder="Pesquisar">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </form>

        <div class="row">
            {{ $paginator->appends(['search' => $search, 'perPage' => $paginator->perPage()])->render() }}

        @forelse($chamados as $c)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">RAT Nº {{ $c->numrat }}</h5>
                    <p class="card-text">Lote {{ $c->numlote }}</p>
                    <p class="card-text"> DATA: {{ date('d/m/Y h:i:s' , strtotime($c->dtabertura)) }}</p>
                    <p class="card-text">{{ $c->problema }}</p>
                    <a href="{{ route('chamados.chamado', ['numrat' => $c->numrat ]) }}" class="btn btn-secondary">Ver</a>
                    <button class="btn btn-danger">Editar</button>
                </div>
            </div>
        @empty
            <p>Não há chamados</p>
        @endforelse
    </div>
        {{ $paginator->appends(['search' => $search, 'perPage' => $paginator->perPage()])->render() }}
@endsection
<script>
    document.body.setAttribute('data-bs-theme', '{{ $usuario['tema'] }}')

</script>
