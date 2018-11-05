<?php

namespace App\Http\Controllers;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['only' => ['create', 'show']]);
    }

 
    public function show($id){
        $solo_post = Post::find($id);
        return view('posts.show', compact('solo_post'));
    }

    public function create(){
        
        return view('posts/create'); 
    }

    public function store(){
       
       $this->validate(request(), [
           'title' => 'required|min:2', 
           'body' => 'required|min:2'
       ]);

            // This code is similar to the comment out code down here 
            // This code line get the current user_id and from the user model get the publish() method.
            // Then create a new instance of Post inside there get the request from the form which is title and body
            // Go to the user model then see the publish method
        // auth()->user()->publish(
        //     new Post(request(['title', 'body']))
        // );

        auth()->user()->posts()->create(request(['title', 'body']));
        // get the user id and create a post with the id of the user

// ************** This code is similar to top of this code **************
        // $post = new Post;
        // $post->title = request()->title;
        // $post->body = request()->body;
        // $post->user_id = auth()->user()->id;
        // $post->save();

       return redirect('/');

        // dd(request(['title', 'body'])); // get all the form request
        // create a new post using the request data
        // save it to the database
        // redirect to homepage
    }
}
