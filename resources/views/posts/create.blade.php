@extends('posts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-9">
                    <h4>Create Post</h4>
                </div>
                <div class="col-md-3 text-end">
                    <a href="{{ route('post.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('post.store') }}">

                {{-- melihat fungsi --}}
                @csrf

                <div class="mt-2">
                    <label class="fw-bold">Title:</label>
                    <input type="text" name="title" class="form-control" placeholder="Masukan title">
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mt-2">
                    <label class="fw-bold">Body:</label>
                    <textarea name="body" class="form-control" placeholder="Masukan body"></textarea>
                    @error('body')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mt-3">
                    <button class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
