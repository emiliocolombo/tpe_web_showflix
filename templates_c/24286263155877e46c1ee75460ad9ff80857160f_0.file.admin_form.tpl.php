<?php
/* Smarty version 4.2.1, created on 2022-10-17 15:05:19
  from 'C:\xamp2\htdocs\web_2\TPE\templates\admin_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d530f837984_72295797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24286263155877e46c1ee75460ad9ff80857160f' => 
    array (
      0 => 'C:\\xamp2\\htdocs\\web_2\\TPE\\templates\\admin_form.tpl',
      1 => 1666011903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634d530f837984_72295797 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mt-5 w-50 mx-auto bg-warning card p-5">

<?php if ((isset($_smarty_tpl->tpl_vars['id']->value))) {?>
    <h2 class="text-center">
        editar pelicula
    </h2>
    <form class="text-center" method="POST" action="edit/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <?php } else { ?>
        <h2 class="text-center">
            agregar pelicula
        </h2>
        <form class="text-center" method="POST" action="add_movie">
    <?php }?>
        
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
<?php }
}
