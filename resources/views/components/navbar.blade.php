<div class="container">
<nav class="navbar navbar-expand-lg bg-body-secondary mt-5  rounded-5 shadow-5">
    <div class="container-fluid">
     
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{Route::is('welcome') ? 'active' : ''}}" aria-current="page" href="{{route('welcome')}}">Home</a>
          </li>
          <li class="nav-item nav-margin">
            <a class="nav-link {{Route::is('articles.index') ? 'active' : ''}}" href="{{route('articles.index')}}">Vedi Articoli</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Route::is('articles.create') ? 'active' : ''}}" href="{{route('articles.create')}}">Crea Articolo</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
</div>