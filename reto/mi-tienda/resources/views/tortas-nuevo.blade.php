@extends('layouts.base')

@section('content')
    @if ($errors->any())
        <div style="color: red; margin-bottom: 15px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/tortas/nuevo" method="POST">
        @csrf
        <div style="margin-bottom: 10px;">
            <label for="sabor">Sabor de la torta:</label><br>
            <input type="text" id="sabor" name="sabor" value="{{ old('sabor') }}">
        </div>

        <div style="margin-bottom: 10px;">
            <label for="precio">Precio en Bs:</label><br>
            <input type="number" id="precio" name="precio" value="{{ old('precio') }}">
        </div>

        <!-- 🟢 CAMPO STOCK AGREGADO AQUÍ -->
        <div style="margin-bottom: 10px;">
            <label for="stock">Stock:</label><br>
            <input type="number" id="stock" name="stock" value="{{ old('stock') }}">
            @error('stock')
                <div style="color: red; font-size: 0.9em;">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Registrar torta</button>
    </form>
@endsection