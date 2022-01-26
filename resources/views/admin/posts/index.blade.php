@extends('layouts.admin')

@section('content')

    <div class="container">

        @foreach ($posts as $post)


            <div class="card" style="width: 18rem;">
                <img src="#" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <h6 class="card-title">{{ $post->price }}</h6>
                    <h6 class="card-title">{{ $post->series }}</h6>
                    <h6 class="card-title">{{ $post->sale_date }}</h6>
                    <h6 class="card-title">{{ $post->type }}</h6>
                    {{-- <p class="card-text">{{ $post->description}}</p> --}}
                    <div class="d-flex justify-content-evenly">

                        <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-light">mostra</a>
                        <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-light">modifica</a>
                        <a>
                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit" value="Cancella">elimina</button>
                            </form>
                        </a>

                    </div>
                </div>
            </div>



        @endforeach
    </div>

@endsection
