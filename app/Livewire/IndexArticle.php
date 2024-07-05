<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class IndexArticle extends Component
{


    public function destroy(Article $article)
    {
        if ($article->image && $article->image !== 'images/default_img.png') {
            Storage::disk('public')->delete($article->image);
        }
        $article->delete();

        session()->flash('message', 'articolo cancellato correttamente');
    }


    public function render()

    {
        $articles = Article::all();
        return view('livewire.index-article', compact('articles'));
    }
}
