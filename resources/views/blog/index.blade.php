@extends('layouts.app')

@section('content')
    @foreach($blogs as $blog)
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a class="card-header" href="{{ route('blog.show',[$blog]) }}">{{ $blog->title }} </a>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <p class="card-text">{{substr(strip_tags($blog->text), 0, 300)}} read more...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="container" >
    <a href="{{ route('blog.create') }}" id="but" class="btn btn-success" role="button">Add blog</a>
    </div>
@endsection
