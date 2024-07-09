<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class ShowArticle extends Component

{
    public $article;

    public function destroy(Article $article)
    {
        if ($article->image && $article->image !== 'images/default_img.png') {
            Storage::disk('public')->delete($article->image);
        }
        $article->delete();
        session()->flash('message', 'articolo cancellato correttamente');
        return redirect()->to('articles/index');
    }




    public function render()
    {
        return view('livewire.show-article');
    }
}
