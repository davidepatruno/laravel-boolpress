<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PublicPostController extends Controller
{
    public function index()
    {
      $posts = Post::orderBy('created_at', 'desc')->paginate(5);

      return view('public.index', compact('posts'));
    }

    public function show($id){
      $post = Post::where('id', $id)->first();
      if (empty($id)){
        abort(404);
      }

      return view('public.post', $post);
    }
}
