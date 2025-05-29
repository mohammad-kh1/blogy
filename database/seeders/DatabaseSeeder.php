<?php
namespace Database\Seeders;

use App\Models\Social;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory(50)->create();
        Article::factory(50)->create();
        Comments::factory(500)->create();
        Category::factory(20)->create();
        Tags::factory(50)->create();
        for ($i = 1; $i <= 20; $i++) {
            DB::table("category_post")->insert([
                "category_id" => Category::inRandomOrder()->first()->id,
                'article_id'  => Article::inRandomOrder()->first()->id,
            ]);
        }
        for ($i = 1; $i <= 20; $i++) {
            DB::table("post_tag")->insert([
                "tag_id"     => Category::inRandomOrder()->first()->id,
                'article_id' => Article::inRandomOrder()->first()->id,
            ]);

        }

        $socialData = [
            ['title' => 'github', 'address' => 'https://github.com'],
            ['title' => 'telegram', 'address' => 'https://telegram.com'],
            ['title' => 'X', 'address' => 'https://x.com'],
            ['title' => 'instagram', 'address' => 'https://instagram.com'],
        ];

        foreach ($socialData as $data) {
            Social::updateOrCreate(
                ['title' => $data['title']],
                ['address' => $data['address']]
            );
        }
        $socialIds = Social::pluck('id')->all();

        User::chunk(100, function ($users) use ($socialIds) {
            foreach ($users as $user) {
                // syncWithoutDetaching will add missing pivot rows without removing existing ones
                $user->socials()->syncWithoutDetaching($socialIds);
            }
        });

    }
}
