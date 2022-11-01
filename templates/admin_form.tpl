<div class="mt-5 w-50 mx-auto bg-warning card p-5">

{if isset($movie)}
    <h2 class="text-center">
        editar pelicula
    </h2>
    <form class="text-center" method="POST" action="edit/{$movie->id}">
    {else}
        <h2 class="text-center">
            agregar pelicula
        </h2>
        <form class="text-center" method="POST" action="add_movie">
    {/if}
        <div class="form-group">
            <label for="nombre">nombre</label>
            <input 
                type="text" 
                class="form-control text-center" 
                name="nombre"
                {if isset($movie)}
                    value="{$movie->nombre_pelicula}"
                {/if}
                required 
            >
        </div>
        <div class="form-group">
            <label for="imagen">direccion de imagen</label>
            <input 
                type="text" 
                class="form-control text-center" 
                name="imagen"
                {if isset($movie)}
                    value="{$movie->imagen}"
                {/if}
                required
            >
        </div>
        <div class="form-group">
            <label for="duracion">duracion</label>
            <input 
                type="text" 
                class="form-control text-center" 
                name="duracion"
                {if isset($movie)}
                    value="{$movie->duracion}"
                {/if}
                required
            >
        </div>
        <div class="form-group">
            <label for="director">director</label>
            <input 
                type="text" 
                class="form-control text-center" 
                name="director"
                {if isset($movie)}
                    value="{$movie->director}"
                {/if}
                required 
            >
        </div>
        <div class="form-group">
            <label for="genero">genero</label>
            <input 
                type="text" 
                class="form-control text-center" 
                name="genero"
                {if isset($movie)}
                    value="{$movie->genero}"
                {/if}
                required
            >
        </div>
        <div class="form-group">
            <label for="descripcion">descripcion</label>
            <input 
                type="text" 
                class="form-control text-center" 
                name="descripcion"
                {if isset($movie)}
                    value="{$movie->descripcion}"
                {/if}
                required
            >
        </div>
        <button type="submit" class="btn btn-primary mt-3">enviar</button>
    </form>
</div>
