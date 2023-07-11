@extends('dashboard')
@section('content')
    <div class="container mx-auto py-8 dark:text-gray-200">
        <div class="max-w-lg mx-auto bg-white dark:bg-gray-700 rounded-lg shadow">
            <div class="p-6">
                <h1 class="text-2xl font-semibold text-center mb-6">Formulário de Atendimento</h1>
                @csrf
                <form method="post">
                    <div class="mb-4">
                        <label class="block mb-2" for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" class="w-full py-2 px-4 rounded-lg dark:text-gray-900">
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2" for="email">E-mail:</label>
                        <input type="email" id="email" name="email" class="w-full py-2 px-4 rounded-lg dark:text-gray-900">
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2" for="telefone">Telefone:</label>
                        <input type="text" id="telefone" name="telefone" class="w-full py-2 px-4 rounded-lg dark:text-gray-900">
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2" for="tipo-cliente">Tipo de Cliente:</label>
                        <select id="tipo-cliente" name="tipo-cliente" class="w-full py-2 px-4 rounded-lg dark:text-gray-900">
                            <option value="1">Opção 1</option>
                            <option value="2">Opção 2</option>
                            <option value="3">Opção 3</option>
                        </select>
                    </div>

                    <!-- Adicione os outros campos aqui -->

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
