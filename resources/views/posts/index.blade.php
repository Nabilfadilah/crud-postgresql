@extends('posts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-9">
                    <h4>Post</h4>
                </div>
                <div class="col-md-3 text-end">
                    <a href="{{ route('post.create') }}" class="btn btn-success">Create Post</a>
                </div>
            </div>
        </div>
        <div class="card-body">

            @session('success')
                <div class="alert alert-success">{{ $value }}</div>
            @endsession

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->body }}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
