<div>
    <div>
        <div class="container mt-4 rounded-4" style="height: 60px;">
          @if(session('message'))
          <div class="alert alert-success">
            {{ session('message') }}
          </div>
          @endif
        </div>
       
        
        <div class="container form-container p-3 rounded-4 shadow-lg text-white mt-5">
      
          <form
          wire:submit.prevent='updateArticle'
          >
          <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input wire:model.blur="title" type="text" class="form-control" id="title" aria-describedby="title">
            <div class="text-black fw-bold">@error('title') {{ $message }} @enderror</div>
            </div>
          <div class="mb-3">
            <label for="subtitle" class="form-label">Descrizione</label>
            <input wire:model.blur="subtitle" type="text" class="form-control" id="subtitle" aria-describedby="subtitle">
            <div class="text-black fw-bold">@error('subtitle') {{ $message }} @enderror</div>
          </div>
          <div class="mb-3">
            <label for="body" class="form-label d-block">Contenuto Principale</label>
            <textarea wire:model.blur="body" id="body" cols="64" rows="10"></textarea>
            <div class="text-black fw-bold">@error('body') {{ $message }} @enderror</div>
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Carica immagine (opzionale)</label>
            <input wire:model="image" class="form-control" type="file" id="image">
          </div>
          <div class="m-1 p-1">
            @if ($imagePreview) 
            <img class="img-fluid rounded-3" src="{{$imagePreview}}">
            @endif
          </div>
              <button type="submit" class="btn btn-dark rounded-3">Salva</button>
        </form>
      </div>
      </div>
      
</div>
