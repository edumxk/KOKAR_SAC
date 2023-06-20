@if(!isset(Auth::user()->tema))
    <img src="{{ asset('/img/logo/kokar-q-light.svg') }}" alt="logo" width="80">
@else
    @if(Auth::user()->tema == 'dark')
        <img src="{{ asset('/img/logo/logo-dark-work.svg') }}" alt="logo" width="80">
    @else
        <img src="{{ asset('/img/logo/kokar-q-light.svg') }}" alt="logo" width="80">
    @endif
@endif

