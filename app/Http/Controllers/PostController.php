<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    /*================================================
    Constructor
    @auth checks and route guarding
    ================================================
     */

    public function __construct()
    {

        $this->middleware('auth');
    }

    /*===============================================================
    Index
    @return \Illuminate\Http\Response

    EXAMPLES

    $posts = Post::all();
    return Post::where('title', 'Post Two')->get();
    $posts = DB::select('SELECT * FROM posts');
    $posts = Post::orderBy('title','desc')->take(1)->get();
    $posts = Post::orderBy('title','desc')->get();

    $posts = Post::latest()->get();
    return view('posts.index', compact('posts'));
    $posts = Post::orderBy('created_at','asc')->paginate(10);

    ===================================================================
     */

    public function index()
    {

        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

    /*================================================
    CREATE
    @return \Illuminate\Http\Response
    ================================================
     */

    public function create()
    {
        return view('posts.create');
    }

    /*======================================================
    STORE
    Store a newly created resource in storage.
    @param  \Illuminate\Http\Request  $request
    @return \Illuminate\Http\Response
    =======================================================
     */

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|',
            'body' => 'required',
        ]);

        // create new post object
        $post = new Post();

        // extract request data and store in variable
        $post->title = request('title');
        $post->body = request('body');

        //save post object
        $post->save();

        // redirect to home page on save
        return redirect('/')->with('success', 'Post Created');
    }

    /*======================================================
    SHOW
    Display the specified resource.
    @param  int  $id
    @return \Illuminate\Http\Response
    =======================================================
     */

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /*======================================================
    EDIT
    Show the form for editing the specified resource
    @param  int  $id
    @return \Illuminate\Http\Response
    =======================================================
     */

    public function edit($id)
    {
        // find post
        $post = Post::find($id);

        // return view with post data
        return view('posts.edit')->with('post', $post);

    }

    /*======================================================
    UPDATE
    Update the specified resource in storage.
    @param  \Illuminate\Http\Request  $request
    @param  int  $id
    @return \Illuminate\Http\Response
    =======================================================
     */

    public function update(Request $request, $id)
    {
        // validation
        $this->validate($request, [
            'title' => 'required|',
            'body' => 'required',
        ]);

        //find post
        $post = Post::find($id);

        // reset variables with updated values
        $post->title = request('title');
        $post->body = request('body');

        // save to database
        $post->save();

        // redirect to posts and display flash message
        return redirect('/')->with('success', 'Post Updated');

    }

    /*======================================================
    DESTROY
    Remove the specified resource from storage.
    @param  int  $id
    @return \Illuminate\Http\Response
    =======================================================
     */

    public function destroy($id)
    {
        // find post
        $post = Post::find($id);

        // call for post to be removed
        $post->delete();

        // redirect to posts and display flash message
        return redirect('/')->with('success', 'Post ' . $id . ' deleted');
    }
}
