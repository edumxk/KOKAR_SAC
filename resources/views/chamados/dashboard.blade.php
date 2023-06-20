@extends('dashboard')
    @section('content')
        <div class="mb-4">
            <form class="form-inline" action="{{ route('chamados.dashboard') }}" method="GET">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Pesquisar</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="text" name="search" value="{{ $search }}" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pesquisar lote, problema, nº chamado...">
                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>
        </div>
        <div class="mb-2">
            {{ $paginator->appends(['search' => $search, 'perPage' => $paginator->perPage()])->render() }}
        </div>

        @forelse($chamados as $k => $c)
            @if($loop->first)
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 w-24">RAT</th>
                            <th scope="col" class="px-6 py-3 w-24">Cliente</th>
                            <th scope="col" class="px-6 py-3 w-24">Lote</th>
                            <th scope="col" class="px-6 py-3 w-2/4">Problema</th>
                            <th scope="col" class="px-6 py-3 w-24 text-center">Data de Abertura</th>
                            <th scope="col" class="px-6 py-3 w-24 text-center">Data de Fechamento</th>
                            <th scope="col" class="px-6 py-3 w-24">status</th>
                        </tr>
                    </thead>
                <tbody>
            @endif

            @if($k % 2 != 0)
                <tr class="bg-gray-50 border-b dark:bg-gray-700 dark:border-gray-700">
            @else
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
            @endif
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white w-24">{{ $c->numrat }}</th>
                    <td class="px-6 text-gray-700 dark:text-gray-200 py-4 w-24 text-center">{{ $c->codcli }}</td>
                    <td class="px-6 text-gray-700 dark:text-gray-200 py-4 w-24 text-center">{{ $c->numlote }}</td>
                    <td class="px-6 text-gray-700 dark:text-gray-200 py-4 w-full">{{ $c->problema }}</td>
                    <td class="px-6 text-gray-700 dark:text-gray-200 py-4 w-24 text-center">{{ date('d/m/Y h:i:s' , strtotime($c->dtabertura)) }}</td>
                    <td class="px-6 text-gray-700 dark:text-gray-200 py-4 w-24 text-center">{{ date('d/m/Y h:i:s' , strtotime(Date('Y/m/d'))) }}</td>
                    <td class="px-6 text-gray-700 dark:text-gray-200 py-4 w-24">{{ $c->numlote }}</td>
                </tr>
            @if($loop->last)
                    </tbody>
                </table>
            @endif


        @empty
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-full text-center text-xl text-gray-600 dark:text-gray-200">Não foi encontrado nenhum chamado!</th>
                    </tr>
        @endforelse
        <div class="mt-2">
            {{ $paginator->appends(['search' => $search, 'perPage' => $paginator->perPage()])->render() }}
        </div>
    @endsection

