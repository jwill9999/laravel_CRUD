@extends('../layouts/app') 
@section('content')

<body>
  <div class="col-md-8 blog-main">
    <h1>To Do Tasks</h1>
    <ul class="list-group mt-5 mb-5">
      @foreach ($tasks as $task)
      <li class="list-group-item">
        <a href="/tasks/{{$task->id}}">{{$task->body}}</a>
      </li>
      @endforeach
    </ul>
    <a class="btn btn-outline-success" href="/" role="button">Home</a>
    <a class="btn btn-outline-info" href="/about" role="button">About</a>
  </div>
@endsection