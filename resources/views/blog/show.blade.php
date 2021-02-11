@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div  id="head2" class="card-header">{{ $blog->title }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <p id="text" class="card-text">{{$blog->text}}</p>
                            @can('update', $blog)
                            <div class="mb-3">
                                <a href="{{ route('blog.edit',[$blog->id]) }}" class="btn btn-success" role="button">Edit blog</a>
                                <a href="{{ route('blog.delete',[$blog]) }}" class="btn btn-danger" role="button">Delete blog</a>
                            </div>
                            @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>
    @auth
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <hr>
                    <h2>Comments:</h2>
                    <div class="card-body">
                        <form id="commentForm" method="POST" action="{{ route('comment.store') }}">
                            @csrf
                            <div class="form-group">
                                <textarea class="summernote" id="summernote" name="comment_text"></textarea>
                                <input type="hidden" id="post_id" name="post_id" value="{{ $blog->id }}">
                            </div>
                            <button type="submit" class="btn btn-success btn-block">Add comment</button>
                        </form>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    @endauth

    <div>
        @foreach($blog->comments as $comment)
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="container" id="comments">
                        <div class="card">
                            <div class="comment-article">
                                <article>
                                    <div><p class="card-text">{!! $comment->comment_text !!}</p></div>
                                    <footer>
                                        @can('delete', $comment)
                                            <div class="float-left">
                                                <a href="{{ route('comment.delete', [$comment->id]) }}"><small>Delete</small></a>
                                            </div>
                                        @endcan
                                        <div class="float-right">
                                            <small><b>comment by </b></small><a href="{{ route('user.show', [$comment->user->id]) }}"><small><b>{{ $comment->user->name }}</b></small></a>
                                        </div>
                                    </footer>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
