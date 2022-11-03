<div class="mt-5 w-50 mx-auto bg-warning card p-5">

{if isset($genre)}
    <h2 class="text-center">
        editar genero
    </h2>
    <form class="text-center" method="POST" action="warning_edit_genre/{$genre->genero}">
    {else}
        <h2 class="text-center">
            agregar genero
        </h2>
        <form class="text-center" method="POST" action="add_genre">
    {/if}
        <div class="form-group">
            <label for="genero">nombre</label>
            <input 
                type="text" 
                class="form-control text-center" 
                name="genre"
                {if isset($genre)}
                    value="{$genre->genero}"
                {/if}
                required 
            >
        </div>
        <div class="form-group">
            <label for="isatp">es apta para todo publico</label>
            <label for="true">si</label>
            <input
            type="radio" 
            value="true" 
            name="isatp"
            {if isset($genre) && $genre->atp == true}
                checked="checked";
            {/if}
            />
            <label for="false">no</label>
            <input
                type="radio" 
                value="false" 
                name="isatp"
                {if isset($genre) && $genre->atp == false}
                    checked="checked";
                {/if}
            />
        </div>
        <button type="submit" class="btn btn-primary mt-3">enviar</button>
    </form>
</div>
