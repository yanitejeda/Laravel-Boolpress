
@extends('layouts.admin')

@section('content')

<div class="container">
    <form action='{{ route('admin.posts.store') }}' method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        
        <div class="mb-3">
            <label for="coverImg" class="form-label">foto</label>
            <input type="text" class="form-control" id="coverImg" name="coverImg">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">content</label>
            <input type="text" class="form-control" id="content" name="content">
        </div>

        <select name='category_id' class="form-control" aria-label="Default select example">
            <option selected>Categoria</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
   
        
    
        <button type="submit" class="btn btn-primary">crea</button>
    </form>

</div>

@endsection
