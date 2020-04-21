@extends('layouts.app')
@section('content')

<div class="container">    
    <div class="col-md-8 offset-md-2">
        <h1 class="mb-3">Lista de Artículos</h1>
        @foreach ($posts as $post)
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title">{{ $post->name }}</h5>
                </div>
                <div class="card-body">
                    @if ($post->file)
                    
                        <img style="width:100%;" class="img-responsive" src="{{$post->file}}">
                    @endif
                    <p class="mt-3">{{$post->excerpt}}</p>
                    <a href=" {{route('post', $post->slug)}} " class="float-right">Leer Más</a>
                </div>
            </div>
        @endforeach
    {{ $posts->render() }}
    </div>

</div>

@endsection