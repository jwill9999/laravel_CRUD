@extends('master') 
@section('content')


<div class="col-md-7">
        
    <h1>Edit post</h1>
        {!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'post' ]) !!}
                <div class="form-group">
                    {{Form::label('title', 'Blog Title' )}}
                    {{Form::text('title', $post->title, ['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                        {{Form::label('body', 'Blog Body' )}}
                        {{Form::textarea('body', $post->body, ['class' => 'form-control'])}}
                    </div>
                    {{Form::submit('Edit Post', ['class' => 'btn btn-success'])}}
                    {{Form::hidden('_method', 'put')}}
        
        {!! Form::close() !!}
</div> 

@endsection