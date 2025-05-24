<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Comments;
use App\Models\Tags;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(50)->create();
        Article::factory(50)->create();
        Comments::factory(500)->create();
        Category::factory(20)->create();
        Tags::factory(50)->create();
        for($i = 1 ; $i <= 20 ; $i++){
            DB::table("category_post")->insert([
                "category_id" => Category::inRandomOrder()->first()->id,
                'article_id' => Article::inRandomOrder()->first()->id,
            ]);
        }
        for($i = 1 ; $i <= 20 ; $i++){
            DB::table("post_tag")->insert([
                "tag_id" => Category::inRandomOrder()->first()->id,
                'article_id' => Article::inRandomOrder()->first()->id,
            ]);
        }
    }
}
