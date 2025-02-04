@extends('posts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-9">
                    <h4>Edit Post</h4>
                </div>
                <div class="col-md-3 text-end">
                    <a href="{{ route('post.index') }}" class="btn btn-secondary btn-sm">Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('post.update', $post->id) }}">

                {{-- melihat fungsi --}}
                @csrf

                {{-- menambah method --}}
                @method('PUT')

                <div class="mt-2">
                    <label class="fw-bold">Title:</label>
                    <input type="text" name="title" class="form-control" placeholder="Masukan title"
                        value="{{ $post->title }}">
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mt-2">
                    <label class="fw-bold">Body:</label>
                    <textarea name="body" class="form-control" placeholder="Masukan body">{{ $post->body }}</textarea>
                    @error('body')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mt-3">
                    <button class="btn btn-success btn-sm">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
