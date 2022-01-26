@extends('layouts.admin')

@section('content')

<div class="container">
    
    
     <form action="{{ route('admin.posts.update', /* ['id'=> $Archives->id] */ $post->id) }}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">subtitle</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle">
        </div>
        <div class="mb-3">
            <label for="coverImg" class="form-label">foto</label>
            <input type="text" class="form-control" id="coverImg" name="coverImg">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">content</label>
            <input type="text" class="form-control" id="content" name="content">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">author</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">category</label>
            <input type="text" class="form-control" id="category" name="category">
        </div>
    
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>

</div>
    
@endsection
