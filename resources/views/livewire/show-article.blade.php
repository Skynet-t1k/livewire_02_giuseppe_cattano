<div>

   <div class="container d-flex justify-content-center mt-150">
    <div class="card" style="width: 28rem;">
        <img src="{{ $article->image ? Storage::url($article->image) : '/images/default_img.png'}}" class="card-img-top" alt="article image">
        <div class="card-body">
          <h4 class="card-title">{{$article->title}}</h4>
          <h6 class="card-title">{{$article->subtitle}}</h6>
          <p class="card-text">{{$article->body}}</p>
          <a href="{{route('articles.index')}}" class="btn btn-info">Indietro</a>
          <a href="{{route('articles.edit', compact('article'))}}" class="btn btn-warning">Modifica</a>
          <button wire:click="destroy({{$article}})" class="btn btn-danger">Cancella</button>
        </div>
      </div>
    </div>

</div>
