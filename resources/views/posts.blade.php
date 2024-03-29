
@extends('layouts.main')

@section('container')
<!-- <h1 class="mb-5">Halaman Blog Posts</h1> -->
<h1 class="mb-5">All Posts</h1>

@if ($posts->count())
    <div class="card mb-3 text-center">
        <img src="https://source.unsplash.com/1200x900?{{ $posts[0]->title }}" class="card-img-top" alt="">
        <div class="card-body">
            <h3 class="card-title"> <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark"> {{ $posts[0]->title }} </a></h3>

            <p>
            <small class="text-muted">
            By. <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none"> {{ $posts[0]->author->username }} </a> in <a class="text-decoration-none" href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
            </small>
            </p>

            <p class="card-text"> {{ $posts[0]->excerpt }} </p>

            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>

        </div>
    </div>
@else
    <p class="text-center fs-4">No post found.</p>
@endif

<div class="container">
    <div class="row">

        <!-- skip1 agar data yg di tampilkan melewati data yg pertama  -->
        @foreach ($posts->skip(1) as $post )
        <div class="col-md-4 mb-3">

            <div class="card">
                <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)"> {{ $post->category->name }} </div>
                <img src="https://source.unsplash.com/500x400?{{ $post->title }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p>
                    <small class="text-muted">
                    By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->username }} </a> {{ $post->created_at->diffForHumans() }}
                    </small>
                    </p>

                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                </div>
            </div>

        </div>
        @endforeach
    </div>
</div>

@endsection
