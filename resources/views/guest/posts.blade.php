{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{dd($posts)}}
            @foreach($posts as $post)
            <div class="card">
                <div class="card-header">{{ $post['title'] }}</div>
                <div class="card-body">
                    <p>{{ $post['content'] }}</p>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
        <div id="root"></div>

    <script src="{{asset('js/front.js')}}"></script>
</body>
</html>
