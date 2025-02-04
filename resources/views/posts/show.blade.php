@extends('posts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-9">
                    <h4>Show Post</h4>
                </div>
                <div class="col-md-3 text-end">
                    <a href="{{ route('post.index') }}" class="btn btn-secondary btn-sm">Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <p><strong>ID: </strong>{{ $post->id }}</p>
            <p><strong>Title: </strong>{{ $post->title }}</p>
            <p><strong>Body: </strong>{{ $post->body }}</p>
        </div>
    </div>
@endsection
