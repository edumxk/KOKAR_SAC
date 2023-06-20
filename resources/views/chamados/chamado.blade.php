@extends('dashboard')
@php
    $total = 0;
@endphp
@section('title', 'RAT '.$numrat)
@section('content')

    <h1>Rat nº {{ $numrat }}</h1>
    <div class="container-fluid text-center mx-auto">
        <div class="row">
            <div class="col">
                <div class="container preload">
                    <h1>Progress bar navigation</h1>
                    <nav>
                        <a href="#" class="active"><i class="fa fa-home"></i><span>Formulário</span></a>
                        <a href="#"><i class="fa fa-briefcase"></i><span>Chamado</span></a>
                        <a href="#"><i class="fa fa-user-secret"></i><span>Análise Produto</span></a>
                        <a href="#"><i class="fa fa-send"></i><span>Parecer Téc.</span></a>
                        <a href="#"><i class="fa fa-send"></i><span>Ação Corretiva</span></a>
                        <div class="line"></div>
                    </nav>
                </div>
            </div>
        </div>
        <table class="table table-borderless">
            @if($chamado[0])
            <tr>
                <th colspan="7">{{ $chamado[0]->problema2 }}</th>
            </tr>
            <tr>
                <th>Lote</th>
                <th>Cod. Produto</th>
                <th>Produto</th>
                <th>Qt</th>
                <th>Preço</th>
                <th>Categoria</th>
            </tr>

            @endif
            @forelse($chamado as $c)
                @if(!is_null($c->numlote))
                    <tr>
                        <td>{{ ($c->numlote) }}</td>
                        <td>{{ ($c->codprod) }}</td>
                        <td>{{ ($c->produto) }}</td>
                        <td>{{ $c->qt }}</td>
                        <td>R$ {{ number_format($c->pvenda, 2, ',', '.') }}</td>
                        <td>{{ ($c->categoria) }}</td>
                    </tr>
                @else
                    <tr>
                        <td colspan="6" class="text-center">Não há produtos</td>
                    </tr>
                @endif
                @php
                    $total += $c->pvenda*$c->qt;
                @endphp
            @empty
            <tr>
                <td>Não há Produtos</td>
            </tr>
            @endforelse
                <tr>
                    <th colspan="4" class="text-end">Total</th>
                    <th colspan="1" class="">R$ {{ number_format( $total, 2, ',', '.') }}</th>
                    <th colspan="2" class=""></th>
                </tr>
            @if($chamado[0])
            <tr class="m-5">
                <th colspan="7">Parecer</th>
            </tr>
            <tr>
                <th colspan="7">{{ $chamado[0]->parecer2 }}</th>
            </tr>
            @endif
        </table>
    </div>
@endsection
