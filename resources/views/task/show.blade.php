@extends('../layouts/app') 
@section('content')
<div class="col-md-8 blog-main">
  <h1>Task</h1>
  <div class="jumbotron">
    <div class="mb-4">
      <div class="float-left">
        <h3>{{$task->body}}</h3>
      </div>
      @if (Auth::check() )
      <div class="float-right">
        <a name="edit" id="edit" class="btn btn-warning " href="#" role="button">Edit</a>
        <a name="delete" id="delete" class="btn btn-danger  mr-3" href="#" role="button">Delete</a>
      </div>
          
      @endif
    </div>
  </div>
  <a class="btn btn-outline-primary" href="/tasks" role="button">Back</a>
  <a class="btn btn-outline-success" href="/" role="button">Home</a>
</div>
@endsection