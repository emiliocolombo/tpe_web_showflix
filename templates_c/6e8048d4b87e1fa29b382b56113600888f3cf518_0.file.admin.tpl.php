<?php
/* Smarty version 4.2.1, created on 2022-10-13 00:49:53
  from 'C:\xamp2\htdocs\web_2\TPE\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634744914619d7_66995912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e8048d4b87e1fa29b382b56113600888f3cf518' => 
    array (
      0 => 'C:\\xamp2\\htdocs\\web_2\\TPE\\templates\\admin.tpl',
      1 => 1665614991,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634744914619d7_66995912 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mt-5 w-25 mx-auto">
    <h2>
        agregar pelicula
    </h2>
    <form method="POST" action="add_user">
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
        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
    </form>
</div>

<?php }
}
