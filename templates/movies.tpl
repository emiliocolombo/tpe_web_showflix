{include file="header.tpl"}
    <div class="row w-100 d-flex justify-content-center p-2">
    {foreach from=$peliculas item=$pelicula}
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{$pelicula->imagen}" class="img-fluid rounded" alt="{$pelicula->nombre_pelicula}">
          </div>
          <div class="col-md-8 justify-content-center d-flex">
            <div class="card-body row col">
              <h5 class="card-title">{$pelicula->nombre_pelicula}</h5>
              <p class="card-text justify-content-center d-flex">{$pelicula->genero}</p>
              <a class="justify-content-center align-items-center d-flex btn" href="movie/{$pelicula->id}">mas info</a>
              {if isset($smarty.session.IS_LOGGED) && $smarty.session.IS_ADMIN}
                <a class="btn" href="delete/{$pelicula->id}">eliminar</a> 
                <a class="btn" href="formedit/{$pelicula->id}">editar</a> 
              {/if}
              </div>
          </div>
        </div>
      </div> 
    {/foreach}

    </div>




{include file="footer.tpl"}