@extends('master') 

@section('content')

<div class="col-md-8 mb-5">
    <a href="/" class="btn btn-outline-secondary"><i class="fas fa-chevron-left mr-2"></i>All Posts</a>
</div>
<div class="col-md-8">
    <h1 class="mb-5">{{$post->title}}</h1>
    <h4>{{$post->body}}</h4>
    <div class="my-5">
        <a name="editpost" id="" class="btn btn-lg btn-warning   " href="/post/edit/{{$post->id}}" role="button">Edit Post</a>
        <a name="deletepost" id="" class="btn btn-lg btn-danger   " href="/post/delete/{{$post->id}}" role="button">Delete Post</a>
    </div>
    @include('../partials/comments')
    @include('../partials/commentForm')
</div>
@endsection