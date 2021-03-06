@extends('layouts.admin')

@section('content')

    <div class="container">


        <form action="{{ route('admin.posts.update', /* ['id'=> $Archives->id] */ $post->id) }}" method="post"
            enctype='multipart/form-data'>
           {{-- da aggiungere l'attributo enctype x far funzionare l'uplode--}}
           
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
           
            <div class="mb-3">
                <label for="coverImg" class="form-label">foto</label>
                <input type="file" class="form-control" id="coverImg" name="coverImg">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">content</label>
                <input type="text" class="form-control" id="content" name="content">
            </div>
            
            <select name='category_id' class="form-control" aria-label="Default select example">
                <option selected>Categoria</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" @if($category->id === $post->category_id) selected @endif>{{$category->name}}</option>
                @endforeach
            </select>

          {{--   <select name='tags[]' class="form-control" aria-label="Default select example">
                <option selected>Tag</option>
                @foreach ($tags as $tag)
                    <option value="{{$tag->id}}"{{--  @if($tag->id === $post->tag) selected @endif >{{$tag->name}}</option>
                @endforeach
            </select>
 --}}
            <button type="submit" class="btn btn-primary">Salva</button>
        </form>

    </div>

@endsection
