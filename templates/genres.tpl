{include file="header.tpl"}
<h1 class="w-100 text-center">generos</h1>
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs d-flex justify-content-center">
    {foreach from=$genres item=$genre}
      <li class="nav-item px-2">
        <div class="card px-2">
          <a class="nav-link" aria-current="true" href="genre/{$genre->genero}">{$genre->genero}</a>
          {if isset($smarty.session.IS_LOGGED) && $smarty.session.IS_ADMIN}
            <a class="nav-link text-danger" aria-current="true" href="warning_delete_genre/{$genre->genero}">eliminar</a>
            <a class="nav-link text-dark" aria-current="true" href="formeditgenre/{$genre->genero}">editar</a>
          {/if}  
        </div>
      </li>
    {/foreach}
      
    </ul>
  </div>
  {foreach from = $movies item = $movie}
    <div class="card-body">
        <div class="card">
            <h5 class="card-header bg-warning">{$movie->nombre_pelicula}</h5>
            <div class="card-body">
                <img class="img-fluid rounded w-25" src="{$movie->imagen}" alt="{$movie->nombre_pelicula}">
                <h5 class="card-title">{$movie->genero}</h5>
                <p class="card-text">{$movie->descripcion}</p>
                <a href="movie/{$movie->id}" class="btn btn-primary">mas info</a>
            </div>
        </div>
    </div>
{/foreach}
</div>
{include file="footer.tpl"}
