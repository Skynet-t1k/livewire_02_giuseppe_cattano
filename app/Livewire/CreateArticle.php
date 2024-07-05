<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class CreateArticle extends Component
{
    use WithFileUploads;

    #[Validate('required', message: 'Campo obbligatorio')]
    #[Validate('min:3', message: 'Minimo tre caratteri')]
    public $title;

    #[Validate('required', message: 'Campo obbligatorio')]
    #[Validate('min:3', message: 'Minimo tre caratteri')]
    public $subtitle;

    #[Validate('required', message: 'Campo obbligatorio')]
    #[Validate('min:3', message: 'Minimo tre caratteri')]
    public $body;

    #[Validate('nullable|image|max:5024')]
    public $image;




    public function store()
    {
        $this->validate();

        $article = new Article;
        $article->title = $this->title;
        $article->subtitle = $this->subtitle;
        $article->body = $this->body;
        if ($this->image) {
            $imagePath = $this->image->store('images', 'public');
            $article->image = $imagePath;
        } else {
            $article->image = 'images/default_img.png';
        }

        $article->save();

        $this->reset();

        session()->flash('message', 'articolo creato correttamente');
    }


    public function render()
    {
        return view('livewire.create-article');
    }
}
