@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Ver etiqueta.
                    </div>
                    <div class="card-body">
                        <p><b>Nombre:</b> {{ $tag->name}} </p>
                        <p><b>Slug:</b> {{ $tag->slug}} </p>
                    </div>
                </div>
            </div>
        </div>
        <a href=" {{route('categories.index')}} " class="btn btn-sm btn-info float-right">Volver</a>
    </div>
@endsection