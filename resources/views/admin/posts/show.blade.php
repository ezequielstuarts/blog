@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Ver post.
                    </div>
                    <div class="card-body">
                        @if ($post->file)
                            <img style="width:100%;" class="img-responsive" src="{{$post->file}}">
                        @endif
                        <p class="mt-3"><b>Nombre:</b> {{ $post->name}} </p>
                        <p><b>Slug:</b> {{ $post->slug}} </p>
                        <p><b>Contenido:</b> {{ $post->body}} </p>
                    </div>
                </div>
            </div>
        </div>
        <a href=" {{route('posts.index')}} " class="btn btn-sm btn-info float-right">Volver</a>
    </div>
@endsection