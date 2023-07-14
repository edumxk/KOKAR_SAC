@extends('dashboard')
@section('content')
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 ">Protocolo</th>
                    <th scope="col" class="py-3 text-left">Nome</th>
                    <th scope="col" class="px-6 py-3 ">Abertura</th>
                    <th scope="col" class="px-6 py-3 text-center">Status</th>
                    <th scope="col" class="px-6 py-3 ">tempo</th>
                </tr>
            </thead>
            <tbody>
                @forelse($chamados as $form)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-600 text-gray-500 hover:bg-gray-200 hover:bg-gray-200 hover:text-gray-900  dark:hover:bg-gray-700 dark:hover:text-gray-100" href="/novo">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="/chamado/{{ $form->protocolo }}">{{ $form->protocolo }}</a>
                        </th>
                        <td>
                            {{ json_decode($form->formulario)->nome }}
                        </td>
                        <td>
                            {{ $form->dataBr() }}
                        </td>
                        <td class="text-center">
                            {{ $form->status }}
                        </td>
                        <td>
                            {{ $form->getTime() }}
                        </td>

                    </tr>
                @empty
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td colspan="5" class="px-6 py-4 whitespace-nowrap">
                            <h1>Não há chamados Abertos</h1>
                        </td>
                    </tr>

                @endforelse
            </tbody>
        </table>
    </div>
@endsection

