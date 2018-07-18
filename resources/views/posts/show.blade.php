@extends('../layouts/app') 
@section('content')

<div class="col-md-8 mb-5">
    <a href="/" class="btn btn-outline-secondary"><i class="fas fa-chevron-left mr-2"></i>All Posts</a>
</div>
<div class="col-md-8">
    <h1 class="mb-5">{{$post->title}}</h1>
    <h4>{{$post->body}}</h4>
    <div class="my-5">
        {!! Form::open(['action' => [ 'PostController@destroy', $post->id], 'method' => 'POST' ]) !!} {{Form::hidden('_method', 'DELETE')}}
        @if(Auth::check())
        <a name="editpost" id="" class="btn btn-lg btn-warning" href="/post/edit/{{$post->id}}" role="button">Edit Post</a>        {{Form::submit('Delete', ['class' => 'btn btn-lg btn-danger float-right mr-4'])}} @endif {!! Form::close() !!}
    </div>
    @if (count($post->comments) > 0 )
    @include('../partials/comments')
    @else
    <h1 class="alert alert-info">Comments</h1>
    <p>No comments available</p>
    @endif 
    @if (Auth::check())
    @include('../partials/commentForm') @endif
</div>
@endsection