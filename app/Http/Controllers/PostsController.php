<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post)
    {
        //{post} is a wildcard so this route is hit with anything that comes after /posts/
        //$post = request('post'); - works same as including post in function argument

        $posts = [ //mock db
            'my-first-post' => 'Hello, this is my first blog post!',
            'my-second-post' => 'Now i am getting the hang of this blogging thing!'
        ];


        if (!array_key_exists($post, $posts)) { //does the wildcard in the query string exist in the database?
            abort(404, 'Sorry that blog post was not found');
        }

        return view('post', [
            'post' => $posts[$post]
        ]);
    }
}
