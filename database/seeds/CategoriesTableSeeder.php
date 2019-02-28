<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['sport', 'informatica', 'tempo libero'];

        foreach ($categories as $n_category)
        {
          $category = new Category;
          $category->title = $n_category;
          $category->slug = Str::slug($n_category);

          $category->save();
        }
    }
}
