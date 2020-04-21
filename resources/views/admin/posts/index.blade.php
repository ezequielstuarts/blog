@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Lista de mis Posts.
                        <a  href=" {{route('posts.create')}} " class="btn btn-sm btn btn-primary float-right">Crear</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="10px">ID</th>
                                    <th>Nombre</th>
                                    <th colspan="3">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td> {{$post->id}} </td>
                                        <td> {{$post->name}} </td>
                                        <td width="10px">
                                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-outline-secondary">
                                                Ver
                                            </a>
                                        </td>
                                        <td width="10px">
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-outline-secondary">
                                                Editar
                                            </a>
                                        </td>
                                        <td width="10px">
                                            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                                                <button class="btn btn-sm btn-outline-danger">Eliminar</button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$posts->render()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection