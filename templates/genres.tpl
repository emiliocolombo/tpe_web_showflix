{include file="header.tpl"}
<h1 class="w-100 text-center">generos</h1>
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs d-flex justify-content-center">
      <li class="nav-item">
        <a class="nav-link" aria-current="true" href="genre/infantil">infantil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="genre/terror">terror</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="genre/nacional">nacional</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="genre/comedia">comedia</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="genre/cienciaficcion">ciencia ficcion</a>
      </li>
      
    </ul>
  </div>
  {foreach from = $genres item = $genre}
    <div class="card-body">
        <div class="card">
            <h5 class="card-header bg-warning">{$genre->nombre_pelicula}</h5>
            <div class="card-body">
                <img class="img-fluid rounded w-25" src="{$genre->imagen}" alt="{$genre->nombre_pelicula}">
                <h5 class="card-title">{$genre->genero}</h5>
                <p class="card-text">{$genre->descripcion}</p>
                <a href="movie/{$genre->id}" class="btn btn-primary">mas info</a>
            </div>
        </div>
    </div>
{/foreach}
</div>
{include file="footer.tpl"}
