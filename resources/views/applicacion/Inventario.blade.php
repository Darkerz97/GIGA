@extends('layouts.app')

@section('title','Invent')
 
@section('content')
    
    <h1>inventario</h1>
    <form method="POST" action="{{ route('Invent')}}">
        @csrf
        <input name="componente" placeholder="escribe el compoenente..."><br>
        <input name="cantidad" placeholder="escribe la cantidad..."><br>
        <button>Enviar</button>

    </form>

@endsection
