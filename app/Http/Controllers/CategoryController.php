<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function tuttiipost($slug){
      $category = Category::where('slug', $slug)->first();
      if (empty($category)){
        abort(404);
      }

      $data = [
        'category' => $category,
        'posts' => $category->posts
      ];
      return view('categories.print_posts', $data);
    }


}
