<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        // $post = Post::latest()
        //     ->filter(request(['month', 'year', 'tae']))
        //     ->get();


        $post = Post::latest();

            if ($month = request('month')) {
                $post->whereMonth('created_at', Carbon::parse($month)->month);
            }

            if ($year = request('year')) {
                $post->whereYear('created_at', Carbon::parse($year)->year);
            }
        
        $post = $post->get();
        

       
        return view('homepage/index', compact('post'));
    }

}