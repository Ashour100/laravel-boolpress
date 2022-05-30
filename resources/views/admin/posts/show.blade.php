@extends('layouts.app')

@section('content')
    <div class="container-fluid w-75 mx-auto">
        <div class="row">
            @if(session('message'))
                <div class="col-12">
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                </div>
            @endif
            <div class="col-12 p-2 mb-2">
                <h1 class="title">
                    {{ $post->title }}
                </h1>
                <h4 class="card-subtitle fs-6">
                    {{ $post->created_at }}
                </h4>
            </div>
            <div class="col-6 p-2 mb-2">
                @if(str_starts_with($post->image_url, 'http'))
                    <img class="rounded w-100" src="{{ $post->image_url }}" alt="image of {{$post->title}}">
                @else
                    <img class="rounded w-100" src="{{ asset('/storage') . '/' . $post->image_url }}" alt="image of {{$post->title}}">
                @endif
            </div>
            <div class="col-6 p-2">
                <div class="card-text">
                    {{ $post->content }}
                </div>
            </div>
        </div>
    </div>
@endsection