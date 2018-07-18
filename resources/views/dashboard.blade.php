@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif


                    <div class="col-md-12">
                        @if (count($posts) > 0) @foreach ($posts as $post)
                        <div class="jumbotron bg-light">
                            <h1 class="mb-5 display-4">{{$post->title}}</h1>
                            <p><strong>Created  : </strong>{{$post->created_at->diffForHumans()}}</p>
                            <div>
                                <a name="" id="" class="btn btn-primary " href="/post/{{$post->id}}" role="button">Read more</a>
                                <a name="delete" id="delete" class="btn btn-danger float-right ml-4" href="#" role="button">Delete</a>
                                <a class="btn btn-warning float-right " href="/post/edit/{{$post->id}}" role="button">Edit</a>
                                
                            </div>
                        </div>
                        @endforeach {{$posts->links()}} @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection