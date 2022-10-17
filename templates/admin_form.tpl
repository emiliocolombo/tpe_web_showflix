<div class="mt-5 w-50 mx-auto bg-warning card p-5">

{if isset($id)}
    <h2 class="text-center">
        editar pelicula
    </h2>
    <form class="text-center" method="POST" action="edit/{$id}">
    {else}
        <h2 class="text-center">
            agregar pelicula
        </h2>
        <form class="text-center" method="POST" action="add_movie">
    {/if}
        
        <div class="form-group">
            <label for="nombre">nombre</label>
            <input type="text" required class="form-control" name="nombre">
        </div>
        <div class="form-group">
            <label for="nombre">direccion de imagen</label>
            <input type="text" required class="form-control" name="imagen">
        </div>
        <div class="form-group">
            <label for="nombre">duracion</label>
            <input type="text" required class="form-control"name="duracion">
        </div>
        <div class="form-group">
            <label for="nombre">director</label>
            <input type="text" required class="form-control" name="director">
        </div>
        <div class="form-group">
            <label for="nombre">genero</label>
            <input type="text" required class="form-control" name="genero">
        </div>
        <div class="form-group">
            <label for="nombre">descripcion</label>
            <input type="text" required class="form-control"name="descripcion">
        </div>
        <button type="submit" class="btn btn-primary mt-3">enviar</button>
    </form>
</div>
