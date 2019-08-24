@extends('template')

@section('title', 'Lista de Archivos')

@section('content')
    <div class="row">
        <div class="col-md-12"><h1>Archivos</h1></div>
    </div>

    <a class="btn btn-primary" href="{{ route('pictures.create') }}">Nuevo</a>
   
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                </thead>
            
                <tbody>
                    @foreach ($pictures as $picture)
                        <tr>
                            <td>{{$picture->id}}</td>
                            <td>{{$picture->name}}</td>
                            <td><a target="_blank" href="{{ route('pictures.show',$picture->id) }}">Ver</a></td>
                        </tr>               
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
@endsection