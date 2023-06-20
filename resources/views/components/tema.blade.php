<form action="{{ route('alterarTema') }}" method="post" >
    @csrf
    <input type="hidden" name="tema" value="{{ Auth::user()->tema }}">
    <x-primary-button type="submit">
        {{ __('Alternar Tema') }}
    </x-primary-button>
</form>
