@extends('master') 
@section('content')
<div class="col-md-8">
    @foreach ($posts as $post)
    <div class="jumbotron bg-light">
        <h1 class="mb-5 display-4">{{$post->title}}</h1>
         <h3 class="mb-5 lead">{{$post->body}}</h3>
            <p><strong>Created  : </strong>{{$post->created_at->diffForHumans()}}</p>
    <a name="" id="" class="btn btn-primary " href="/post/{{$post->id}}" role="button">Read more</a>
    </div>
    @endforeach
</div>
@endsection