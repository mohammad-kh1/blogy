<?php
namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $top_articles    = Article::query()->where("published", "1")->orderBy("views", "desc")->take(5)->get();
        $latest_articles = Article::query()->with("author")->take(6)->get();
        return view("livewire.home")->with(["articles" => $top_articles, "latest_articles" => $latest_articles]);
    }
}
