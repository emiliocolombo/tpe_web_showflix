{include file="header.tpl"}
<div class="text-center card bg-warning my-2 py-5">
    <h1>
        ADVERTENCIA
    </h1>
    <h2>
        {$text}
    </h2>
    <div class="w-100 bg-dark d-flex align-items-center card bg-warning my-2 p-5">
        <a class="btn my-3 py-4 col-5 bg-primary" href="{$basehref}{$linkTrue}">aceptar</a>
        <a class="btn my-3 py-4 col-5 bg-danger" href="{$basehref}{$linkFalse}">cancelar</a> 
    </div>
</div>
{include file="footer.tpl"}