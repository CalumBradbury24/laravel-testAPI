<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use DB;
use App\Models\Post;

class PostsController extends Controller
{
    public function show($slug)
    {
        /*
        //{post} is a wildcard so this route is hit with anything that comes after /posts/
        //$post = request('post'); - works same as including post in function argument

        $posts = [ //mock db
            'my-first-post' => 'Hello, this is my first blog post!',
            'my-second-post' => 'Now i am getting the hang of this blogging thing!'
        ];
        */
//Select from the posts table the row with key of the slug from req.query
       // $post = DB::table('posts')->where('slug', $slug)->first();

        $post = Post::where('slug', $slug)->firstOrFail(); //Get first post that matches or fail if no posts match this slug
      //  dd($post); -dump and die, puts this variable on the browser so you can debug it 
        
      /*
      //First or fail creates a 404 model not found exception if no post is found and so we dont need to manually catch errors like below
        if(!$post){
            abort(404, "post not found!");
        }
        */
        return view('post', [
           // 'post' => $posts[$post]
           'post' => $post
        ]);
    }
}
