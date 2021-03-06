@extends('layouts.base')

@section('title', $category->name)

@section('content')
    {{--.p-3.mx-auto.text-center>h1.display-4{ActuNews}--}}
    <div class="p-3 mx-auto text-center">
        <h1 class="display-4">{{ $category->name }}</h1>
    </div>

    {{--.py-5.bg-light>.container>.row>.col-md-4.mt-4--}}
    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach($category->posts as $post)
                    <div class="col-md-4 mt-4">
                        <div class="card shadow-sm">
                            <img src="{{ asset("storage/posts/$post->featuredImage") }}" class="card-img-top" alt="{{ $post->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <a href="{{ route('default.post', [
                                    'category' => $post->category->alias,
                                    'alias' => $post->alias,
                                    'id' => $post->id
                                ]) }}" class="btn btn-primary">Voir l'Article</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
