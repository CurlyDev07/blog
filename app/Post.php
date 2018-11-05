<?php

namespace App;

class Post extends Model
{
    protected $guarded = ['user_id'];

    public function comments(){
        return $this->hasMany(Comment::class); // this comment clas is the same with App/Comment
    }

    public function user(){
        return $this->belongsTo(User::class);// this comment clas is the same with App/User
    }

    public function scopeFilter($query, $filters){
        
    }

    public static function archives(){
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get();
    }
     
}
