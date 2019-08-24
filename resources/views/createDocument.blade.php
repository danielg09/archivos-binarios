@extends('template')

@section('title', 'Subir PDF')

@section('content')

        <div class="container">
            <div class="row">
                <div class="col-md-12"><h1>Subir PDF</h1></div>
            </div>
            <div class="col-md-12">
                <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">    
                    @csrf         
                    <div class="form-group">
                        <input type="text" name="name" class="form-control">
                    </div>   
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile04" name="pdf">
                        <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Subir</button>
                      </div>
                    </div>    
                </form>
            </div>
        </div>

@endsection