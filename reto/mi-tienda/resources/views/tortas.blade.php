@extends('layouts.base')

@section('content')
    <p>Un espacio artesanal donde cada torta se elabora diariamente con ingredientes frescos y dedicacion de barrio.</p>

    <p>Hay {{ count($tortas) }} tortas en la vitrina.</p>

    <ul>
        @foreach($tortas as $torta)
            <li>Sabor: {{ $torta->sabor }} — Precio: {{ $torta->precio }} Bs</li>
        @endforeach
    </ul>
    <td>{{ $torta->stock }}</td>

    <p>Vitrina atendida por Ivan Limachi Mamani</p>

    <br>

    <a href="/tortas/nuevo">Registrar nueva torta</a>
@endsection