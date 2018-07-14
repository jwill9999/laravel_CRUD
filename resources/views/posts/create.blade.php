@extends('master') 
@section('content')


<div class="col-md-7">
        
    <h1>Publish a post</h1>
        {!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Blog Title' )}}
                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title of Post'])}}
                </div>
                <div class="form-group">
                        {{Form::label('body', 'Blog Body' )}}
                        {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Post contents'])}}
                    </div>
                    {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
        
        {!! Form::close() !!}
</div> 

@endsection

