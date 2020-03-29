@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detalle del blog <b>{{ $blog->name}}</b></div>
                    <a href="{{ route("blogs.index")}}" class="btn btn-info text-white">Volver al listado de Blogs</a>
                    <a href="{{ route("posts.create", ["blogId" => $blog->id]) }}" class="btn btn-success btn-block mt-3">Añadir un nuevo POST</a>

                    

                    <table class="table">
                        @if($blog->posts->count())
                         <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>POST</th>
                                    <th>ACCIONES</th>
                                </tr>
                         </thead>
                        @endif 
                        <tbody>
                        @forelse($blog->posts as $post)
                            <tr>
                                <td>{{ $post->id}}</td>
                                <td>{{ $post->title}}</td>
                                <td>
                                    <a href="{{ route("posts.show", ["blogId" => $blog->id, "id" => $post-> id]) }}" class="btn btn-dark">Ir al post</a>
                                </td>
                            </tr>
                          @empty 
                            <tr>
                                <td>
                                    <p class="alert alert-warning text-center">No hay Posts</p>
                                </td>
                            </tr>
                          @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection