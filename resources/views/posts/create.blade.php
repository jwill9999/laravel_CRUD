@extends('master') 
@section('content')
<div class="col-md-8">
    @include('../partials/error')
    <h1>Publish a post</h1>
    <form class="mt-5" method="POST" action="/posts">
        @csrf
        <div class="form-group">
            <label for="title">Blog Title</label>
            <input name="title" type=text" class="form-control">            
        </div>       
        
        <div class="form-group">
            <label for="body">Blog Body</label>
            <input name="body" type="body" class="form-control">
        </div>
        
        <button type="submit " class="btn btn-primary ">Submit</button>
    </form>  
    
    </div>
@endsection