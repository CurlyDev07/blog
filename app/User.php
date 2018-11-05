<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function posts(){
        return $this->hasMany(Post::class); // the user can have many Posts
    }//create a relationship with a post



    // notice that already has a relationship between user and a Post

    // public function publish(Post $post){ // in the Post controller we pass a parameter of an instance of Post included a request from the form which is title and body
        // And from this model get the posts() method and this post method created a connection between post and user model
        // $this->posts()->save($post); 
        // then save the passed parameter of post 
    // }

}