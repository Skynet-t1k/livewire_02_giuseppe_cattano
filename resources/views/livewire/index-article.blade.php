<div>
    <div class="container mt-5">
    @if(session('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
    @endif
    @if ($articles->isNotEmpty())
    <table class="table table-hover table-primary table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Titolo</th>
          <th scope="col">Descrizione</th>
          <th scope="col">Gestisci</th>
        </tr>
      </thead>
      <tbody>
         @foreach ($articles as $article)
          <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article->subtitle}}</td>
            <td>
            <a href="{{route('articles.show', compact('article'))}}" class="btn btn-info">Leggi</a>
            <a href="{{route('articles.edit', compact('article'))}}" class="btn btn-warning">Modifica</a>
            <button wire:click="destroy({{$article}})" class="btn btn-danger">Cancella</button>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
        
    @else
        <h1 class="text-center my-5">Nessun Articolo creato, sii il primo a crearne uno</h1>
    @endif

     
    </div>
</div>
