{include file="header.tpl"}
<div class="mt-5 w-50 mx-auto bg-warning card p-5">
    <h2 class="text-center">
        registrece gratis
    </h2>
    <form class="text-center" method="POST" action="add_user">
        <div class="form-group">
            <label for="nombre">nombre</label>
            <input type="text" required class="form-control" name="nombre">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="email" required class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="password">contraseña</label>
            <input type="password" required class="form-control"name="password">
        </div>
        {if $error} 
            <div class="alert alert-danger mt-3">
                {$error}
            </div>
        {/if}
        <button type="submit" class="btn btn-primary mt-3">registrarse</button>
    </form>
</div>
{include file="footer.tpl"}