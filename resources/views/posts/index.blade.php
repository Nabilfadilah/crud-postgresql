@extends('posts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-9">
                    <h4>Post</h4>
                </div>
                <div class="col-md-3 text-end">
                    <a href="{{ route('post.create') }}" class="btn btn-success btn-sm">Create Post</a>
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
                        <th width="250px">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->body }}</td>
                            <td>
                                <form method="POST" action="{{ route('post.delete', $post->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary btn-sm">Show</a>
                                    <a href="{{ route('post.edit', $post->id) }}"
                                        class="btn btn-outline-info btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
