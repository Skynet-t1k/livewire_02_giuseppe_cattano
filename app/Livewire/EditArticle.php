<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Storage;

class EditArticle extends Component
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
    public $imagePreview;

    public $article;

    public function mount()
    {
        $this->title = $this->article->title;
        $this->subtitle = $this->article->subtitle;
        $this->body = $this->article->body;
        $this->imagePreview = '/storage/' . $this->article->image;
    }

    public function updatedImage()
    {
        $this->imagePreview = $this->image->temporaryUrl();
    }

    public function updateArticle()
    {
        $this->validate();

        $data = [
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
        ];

        if ($this->image) {
            if ($this->article->image && $this->article->image !== 'images/default_img.png') {
                Storage::disk('public')->delete($this->article->image);
            }
            if ($this->article->image !== 'images/default_img.png') {
                $data['image'] = $this->image->store('images', 'public');
            } else {
                $data['image'] = 'images/default_img.png';
            }
        }

        $this->article->update($data);


        session()->flash('message', 'articolo modificato correttamente');
    }

    public function render()
    {
        return view('livewire.edit-article');
    }
}
