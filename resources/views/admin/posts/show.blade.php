@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card">
            <img src="{{ $post->coverImg }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title">{{ $post->title }}</h3>
                <p class="card-text">{{ $post->content }}</p>
                <h6>{{ $post->author }}</h6>
                <div class="form-group">
                    <label class="form-label">categoria</label>
                    <br>
                    {{$post->category->name}}

                </div>

                <div class="d-flex">

                    <form class="pr-2" action="{{ route('admin.posts.edit', $post->id) }}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-info">Modifica</button>
                    </form>
                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post" class="form-delete">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger " type="submit">Elimina</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
