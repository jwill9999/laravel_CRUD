

    <h2>Comments</h2>
    @foreach ($post->comments as $comment)
    <ul class="list-group mt-3">        
    <li class="list-group-item disabled">{{$comment->body}}<p class="float-right">Created: {{$comment->created_at->diffForHumans()}}</p></li>    
    </ul>
     
    @endforeach
 

