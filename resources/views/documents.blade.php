@extends('template')

@section('title', 'Lista de PDFs')

@section('content')
    <div class="row">
        <div class="col-md-12"><h1>Archivos PDF</h1></div>
    </div>

    <a class="btn btn-primary" href="{{ route('documents.create') }}">Nuevo</a>
   
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>PDF</th>
                </thead>
            
                <tbody>
                    @foreach ($documents as $document)
                        <tr>
                            <td>{{$document->id}}</td>
                            <td>{{$document->name}}</td>
                            <td><a target="_blank" href="{{ route('documents.show',$document->id) }}">Ver</a></td>
                        </tr>               
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
@endsection