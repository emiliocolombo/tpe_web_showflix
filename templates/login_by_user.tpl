{include file="header.tpl"}
<h2 class="text-center card bg-warning my-2 py-5">
    bienvenido {$nombre}
</h2>

{if $smarty.session.IS_ADMIN}
    {include file="admin_movies_form.tpl"}
    {include file="admin_genres_form.tpl"}
    {else}
        {if !empty($sellData)}
            <h3 class="card bg-dark text-warning py-5">
                ultimas compras
            </h3>
            {foreach from=$sellData item=$data}
                <ul>
                    <li>id transaccion: {$data->id_transaccion}</li>
                    <li>precio: {$data->precio_vendido}</li>
                    <li>nombre pelicula: {$data->pelicula}</li>
                </ul>
            {/foreach}
            {else}
                <h2 class="card bg-dark text-warning py-5">
                    todavia no ha realizado ninguna compra
                </h2>
            {/if}
{/if}    

<a class="btn bg-warning text-dark text-center my-2 px-5" href="logout">
    logout
</a>

{include file="footer.tpl"}