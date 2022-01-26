{{-- @include('layouts.admin') --}}
@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in! admin') }}
                        <div>

                            <a class="btn btn-primary" href="{{ route('admin.posts.create') }}"> crea nuovo post</a>
                            <a class="btn btn-primary" href="{{ route('admin.posts.index') }}"> mostra post</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
