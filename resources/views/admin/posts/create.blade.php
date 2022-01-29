
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
   
        <div class="mb-3">
            <label for="category" class="form-label">category</label>
            <input type="text" class="form-control" id="category" name="category">
        </div>
    
        <button type="submit" class="btn btn-primary">crea</button>
    </form>

</div>

@endsection
