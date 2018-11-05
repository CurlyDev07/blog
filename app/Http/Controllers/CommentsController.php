<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{

    public function add_comment(Request $request, $comment_id){
        $comment = new Comment;
        $comment->body = $request->body;
        $comment->post_id = $comment_id;
        $comment->save();

        return back();
    }// Comments

}