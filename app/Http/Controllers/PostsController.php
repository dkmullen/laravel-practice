<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post) 
    {
        $posts = [
            'my-first-post' => 'Welcome. This is my first post',
            'my-second-post' => 'Welcome. This is my second post',
        ];
    
        if(!array_key_exists($post, $posts)) {
            // Laravel's 404 page...
            abort(404, 'Sorry, that post doesn\'t exist.');
        }
    
        return view('post', [
            'post' => $posts[$post]
        ]);
    }
}
