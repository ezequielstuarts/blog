@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Ver categortia.
                    </div>
                    <div class="card-body">
                        <p><b>Nombre:</b> {{ $category->name}} </p>
                        <p><b>Slug:</b> {{ $category->slug}} </p>
                        <p><b>Contenido:</b> {{ $category->body}} </p>
                    </div>
                </div>
            </div>
        </div>
        <a href=" {{route('categories.index')}} " class="btn btn-sm btn-info float-right">Volver</a>
    </div>
@endsection