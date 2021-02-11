@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card" id="profile_public">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <div class="mt-3">
                                <h4>{{ @$user->name }}</h4>
                                <p class="text-muted">Blogs: {{ $numberOfBlogs }}</p>
                                <p class="text-muted">Commments: {{ $numberOfComments }}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <hr>
                <h2>Blogs by {{ @$user->name }}:</h2>
                @foreach($blogs as $blog)
                    <div class="container profile-posts-list">
                        <div class="card">
                            <div class="profile-posts-list-c" >
                                    <header><a href="{{ url('blog', @$blog->id) }}"><h5> {{ @$blog->title }} </h5> </a> </header>
                                    <time class="card-text text-muted">{{ @$blog->created_at }}</time>
                                    <div><p class="card-text">{{ substr(strip_tags($blog->text), 0, 100) }}...</p></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
