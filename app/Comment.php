<?php

namespace App;


class Comment extends Model
{
    // $comment->post;
    public function post(){
        return $this->belongsTo(Post::class); // user who create the post --->$post->user
        //get the post and the user
        //$comment->post->user
    }//create a relationship with post

    public function user(){
        return $this->belongsTo(User::class); // get the owner of the comment ----> $comment->user->name
    }//create a relationship with user
}
