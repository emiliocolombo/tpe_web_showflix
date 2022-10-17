{include file="header.tpl"}
<div class="w-100 m-4">
    <div class="row col-12 my-3">
        <div class="card-group col-12 card bg-warning">
            <h2 class="text-center w-100">
                para los amantes del terror
            </h2>
        </div>
        <div class="card-group">
            {$i = 0}
            {foreach from=$movies item=$movie}
                {if $movie->genero == 'terror'}
                    <div class="card col-4">
                        <div class="d-flex justify-content-center">                    
                            <img src="{$movie->imagen}" class="img-fluid rounded w-50" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{$movie->nombre_pelicula}</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer btn btn-warning rounded">
                            <a class="text-decoration-none text-dark" href="movie/{$movie->id}">
                                mas info
                            </a>
                        </div>
                    </div>
                    {$i = $i + 1}
                {/if}
                {if $i == 3}
                    {break}
                {{/if}}
            {/foreach}
        </div>
    </div>
    <div class="row col-12 my-3">
        <div class="card-group col-12 card bg-warning">
            <h2 class="text-center w-100">
                para ver en familia
            </h2>
        </div>
        <div class="card-group">
            {$i = 0}
            {foreach from=$movies item=$movie}
                {if $movie->genero == 'infantil'}
                    <div class="card col-4">
                        <div class="d-flex justify-content-center">                    
                            <img src="{$movie->imagen}" class="img-fluid rounded w-50" alt="...">
                        </div>                        <div class="card-body">
                            <h5 class="card-title">{$movie->nombre_pelicula}</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer btn btn-warning rounded">
                            <a class="text-decoration-none text-dark w-100 text-center" href="movie/{$movie->id}">
                                mas info
                            </a>
                        </div>
                    </div>
                    {$i = $i + 1}
                {/if}
                {if $i == 3}
                    {break}
                {{/if}}
            {/foreach}
        </div>
    </div>
    <div class="row col-12 my-3">
        <div class="card-group col-12 card bg-warning">
            <h2 class="text-center w-100">
                para llorar de la risa!!
            </h2>
        </div>
        <div class="card-group text-center">
            {$i = 0}
            {foreach from=$movies item=$movie}
                {if $movie->genero == 'comedia'}
                    <div class="card col-4">
                        <div class="d-flex justify-content-center">                    
                            <img src="{$movie->imagen}" class="img-fluid rounded w-50" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{$movie->nombre_pelicula}</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer btn btn-warning rounded">
                            <a class="text-decoration-none text-dark" href="movie/{$movie->id}">
                                mas info
                            </a>
                        </div>
                    </div>
                    {$i = $i + 1}
                {/if}
                {if $i == 3}
                    {break}
                {{/if}}
            {/foreach}
        </div>
    </div>
</div>
{include file="footer.tpl"}