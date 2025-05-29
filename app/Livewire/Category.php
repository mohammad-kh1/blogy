<?php
namespace App\Livewire;

use App\Models\Article;
use App\Models\Tags;
use Livewire\Component;

class Category extends Component
{

    public function search()
    {
        dd(10);
        $this->articles = Article::query()->with("author")->with("categories")->where("title", "LIKE", "%$this->title%");
        return $this->redirect("/category");
    }

    public function render()
    {
        $articles      = Article::query()->with("author")->with("categories")->latest()->paginate(6);
        $categories    = \App\Models\Category::query()->withCount("articles")->orderBy("articles_count", "DESC")->get();
        $best_articles = Article::query()->orderBy("views", "desc")->take(5)->get();
        $tags          = Tags::limit(5)->get();
        return view('livewire.category')->with(compact('articles', 'categories', 'best_articles', 'tags'));
    }
}
