<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10 ; $i++) {
        $category = Category::inRandomOrder()->first();
        $post = New Post;
        $post->category_id = $category['id'];
        $post->title = $faker->sentence(6);
        $post->author = $faker->name;
        $post->content = $faker->text;

        $post->save();
      }
    }
}
