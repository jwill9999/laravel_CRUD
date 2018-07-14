<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        EXAMPLES

            $posts = Post::all();
            return Post::where('title', 'Post Two')->get();
            $posts = DB::select('SELECT * FROM posts');
            $posts = Post::orderBy('title','desc')->take(1)->get();
            $posts = Post::orderBy('title','desc')->get(); 

            $posts = Post::latest()->get();
            return view('posts.index', compact('posts'));
            $posts = Post::orderBy('created_at','asc')->paginate(10);

        */

        $posts = Post::orderBy('created_at','desc')->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        
       
        return view('posts.edit')->with('post', $post);
        

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
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

      

        $post->save();

        return redirect('/');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
