@extends('layouts.app')

@section('content')
    @foreach($blogs as $blog)
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('blog.show',[$blog]) }}">{{ $blog->title }}</a>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <p class="card-text">{{$blog->text}}</p>
                            <div class="mb-3">
                            <a href="{{ route('blog.edit',[$blog->id]) }}" class="btn btn-success" role="button">Edit blog</a>
                            <a href="{{ route('blog.delete',[$blog]) }}" class="btn btn-danger" role="button">Delete blog</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <a href="{{ route('blog.create') }}" class="btn btn-success" role="button">Add blog</a>
@endsection
