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
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <a href="{{ route('blog.create') }}" class="btn btn-success" role="button">Add blog</a>
@endsection
