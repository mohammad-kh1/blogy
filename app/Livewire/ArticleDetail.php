<?php
namespace App\Livewire;

use App\Models\Article;
use App\Models\Tags;
use Livewire\Attributes\Url;
use Livewire\Component;

class ArticleDetail extends Component
{
    #[Url]
    public $slug = '';
    public function render()
    {
        $article = Article::where("slug", $this->slug)
            ->with([
                'author.socials',
                'comments',
                'categories',
            ])
            ->first();
        $categories    = \App\Models\Category::query()->withCount("articles")->orderBy("articles_count", "DESC")->get();
        $best_articles = Article::query()->orderBy("views", "desc")->take(5)->get();
        $tags          = Tags::limit(5)->get();
        return view('livewire.article-detail')->with(compact('article', 'categories', 'best_articles', 'tags'));
    }
}
