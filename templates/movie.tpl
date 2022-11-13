{include file="header.tpl"}
    <div class="card row col-12">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{$pelicula->imagen}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8 justify-content-center d-flex">
            <div class="card-body row col">
              <h5 class="card-title">{$pelicula->nombre_pelicula}</h5>
              <p class="card-text justify-content-center d-flex">genero {$pelicula->genero}</p>
              <p class="card-text justify-content-center d-flex">duracion: {$pelicula->duracion}</p>
              <p class="card-text justify-content-center d-flex">director: {$pelicula->director}</p>
              <p class="card-text justify-content-center d-flex">stock: 
              {if isset($stockData->cant_copias)}
                  {$stockData->cant_copias}
                {else}
                  no esta disponible
              {/if}
                </p>
              <p class="card-text justify-content-center d-flex">precio (usd):
                {if isset($stockData->precio_usd)}
                  {$stockData->precio_usd}
                {else}
                  no esta disponible
                {/if}
              </p>
              {if isset($smarty.session.IS_LOGGED) && !$smarty.session.IS_ADMIN}
                {if $error} 
                    <div class="alert alert-danger mt-3 d-flex justify-content-center align-items-center">
                        {$error}
                    </div>
                {/if}
                <a class="btn d-flex align-items-center justify-content-center" href="buy/{$pelicula->id}/{$smarty.session.USER_ID}">comprar</a> 
              {/if}
              </div>
          </div>
        </div>
      </div> 
{include file="footer.tpl"}