@extends('layouts.app')
@section('content')

<div class="container">    
    <div class="col-md-8 offset-md-2">
        <h1 class="mb-3">{{$post->name}}</h1>
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title">
                Categoria
                    <a href=" {{route('category', $post->category->slug)}} "> {{$post->category->name}} </a>
                </h5>
            </div>
            <div class="card-body">
                @if ($post->file)
                    <img style="width:100%;" class="img-responsive" src="{{$post->file}}">
                @endif
                <p class="mt-3">{{$post->excerpt}}</p>
                <hr>
                {!! $post->body !!}</a>
                <hr>
                Etiquetas
                @foreach ($post->tags as $tag)
                    <a href="{{route('tag', $tag->slug)}}"> {{$tag->name}} </a>
                @endforeach
            </div>
        </div>
    </div>

</div>

@endsection