@extends('layouts.app')
<!-- TODO: tranformar em realtime, no modelo original recarregava a cada 3 segundos -->
@section('content')
    @if ($result['estado'] == 'D')
        <img src="{{ asset('imagens/vermelho_200x200.png') }}">
    @else
        <img src="{{ asset('imagens/verde_200x200.png') }}">
    @endif
@endsection