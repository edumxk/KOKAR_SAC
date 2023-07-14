@extends('dashboard')
@section('content')
    <div class="container mx-auto py-8 dark:text-gray-200">
        <div class="max-w-lg mx-auto bg-white dark:bg-gray-700 rounded-lg shadow">
            <div class="p-6">
                <h1 class="text-2xl font-semibold text-center mb-6">Formulário de Atendimento</h1>
                <form method="post">
                @csrf
                    <div class="mb-4">
                        <label class="block mb-2" for="nome">NOME:</label>
                        <input type="text" id="nome" name="nome" class="w-full py-2 px-4 rounded-lg dark:text-gray-900">
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2" for="email">E-MAIL:</label>
                        <input type="email" id="email" name="email" class="w-full py-2 px-4 rounded-lg dark:text-gray-900">
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2" for="telefone">TELEFONE:</label>
                        <input type="text" id="telefone" name="telefone" class="w-full py-2 px-4 rounded-lg dark:text-gray-900">
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2" for="descricao">DESCRIÇÃO DO PROBLEMA:</label>
                        <textarea id="descricao" name="descricao" class="w-full py-2 px-4 rounded-lg dark:text-gray-900"
                        rows="3"></textarea>
                    </div>

                    <!-- Adicione os outros campos aqui -->
                    @foreach($dados as $d)
                        @if($d->tipo == 'text')
                            <div class="mb-4">
                                <label class="block mb-2" for="{{$d->descricao}}">{{$d->descricao}}:</label>
                                <input type="text" id="{{$d->nome}}" name="{{$d->nome}}" class="w-full py-2 px-4 rounded-lg dark:text-gray-900">
                            </div>
                        @elseif($d->tipo == 'email')
                            <div class="mb-4">
                                <label class="block mb-2" for="{{$d->nome}}">{{$d->nome}}:</label>
                                <input type="email" id="{{$d->nome}}" name="{{$d->nome}}" class="w-full py-2 px-4 rounded-lg dark:text-gray-900">
                            </div>
                        @elseif($d->tipo == 'telefone')
                            <div class="mb-4">
                                <label class="block mb-2" for="{{$d->nome}}">{{$d->nome}}:</label>
                                <input type="text" id="{{$d->nome}}" name="{{$d->nome}}" class="w-full py-2 px-4 rounded-lg dark:text-gray-900">
                            </div>
                        @elseif($d->tipo == 'select')
                            <div class="mb-4">
                                <label class="block mb-2" for="{{ $d->id }}">{{ $d->descricao }}:</label>
                                <select id="{{ $d->id }}" name="{{ $d->id }}" class="w-full py-2 px-4 rounded-lg dark:text-gray-900">
                                    @foreach($d->itemformulario as $op)
                                        <option value="{{ $op->idopcao }}">{{ $op->descricaoitem }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @elseif($d->tipo == 'textarea')
                            <div class="mb-4">
                                <label class="block mb-2" for="{{$d->nome}}">{{$d->nome}}:</label>
                                <textarea id="{{$d->nome}}" name="{{$d->nome}}" class="w-full py-2 px-4 rounded-lg dark:text-gray-900"></textarea>
                            </div>
                        @endif
                    @endforeach
                    <div class="flex items-center justify-center mt-6">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                            Enviar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
