@extends('layouts.app')

@section('content')
    <div class="wrapper w-75 mx-auto">
        <div class="container-fluid">
            <div class="row p-4">
                {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif --}}
            </div>
            <div class="row p-4">

                <form action="{{ route('admin.posts.update', $post) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" value="{{$post->title}}">
                        <div id="titleHelp" class="form-text">Inserisci un titolo che non potrai dimenticare</div>
                        @error('title')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
{{-- 
                    <div class="mb-3">
                        @foreach ($categories as $category)
                            <input class="form-check-input" type="checkbox" name="category[]" value="{{$category->id}}"
                            @if($post->categories->contains($category)) checked @endif//
                            {{ $post->categories->contains($category) ? 'checked' : '' }}
                            >
                            <label for="categories" class="badge rounded-pill me-3" style="background-color: {{ $category->color }}">
                                {{$category->name}}
                            </label>
                        @endforeach
                    </div> --}}


                    <div class="mb-3">
                        {{-- <label for="image_url">Url dell'immagine</label>
                        <input type="text" name="image_url" id="image_url" value="{{$post->image_url}}"> --}}
                        <label for="image">Url dell'immagine</label>
                        <input type="file" id="image" name="image">
                        @error('image')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">

                        <label for="content" class="form-label">Inserisci il contenuto del post</label>
                        <textarea class="form-control" id="content" rows="10" name="content" id="content">
                            {{$post->content}}
                        </textarea>
                        @error('content')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Modifica il post</button>
                </form>

            </div>
        </div>
    </div>
@endsection