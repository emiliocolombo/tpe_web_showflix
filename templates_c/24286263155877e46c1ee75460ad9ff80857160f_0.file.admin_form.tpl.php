<?php
/* Smarty version 4.2.1, created on 2022-11-02 15:33:44
  from 'C:\xamp2\htdocs\web_2\TPE\templates\admin_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63627fc84a0a38_94982313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24286263155877e46c1ee75460ad9ff80857160f' => 
    array (
      0 => 'C:\\xamp2\\htdocs\\web_2\\TPE\\templates\\admin_form.tpl',
      1 => 1667331112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63627fc84a0a38_94982313 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mt-5 w-50 mx-auto bg-warning card p-5">

<?php if ((isset($_smarty_tpl->tpl_vars['movie']->value))) {?>
    <h2 class="text-center">
        editar pelicula
    </h2>
    <form class="text-center" method="POST" action="edit_movie/<?php echo $_smarty_tpl->tpl_vars['movie']->value->id;?>
">
    <?php } else { ?>
        <h2 class="text-center">
            agregar pelicula
        </h2>
        <form class="text-center" method="POST" action="add_movie">
    <?php }?>
        <div class="form-group">
            <label for="nombre">nombre</label>
            <input 
                type="text" 
                class="form-control text-center" 
                name="nombre"
                <?php if ((isset($_smarty_tpl->tpl_vars['movie']->value))) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['movie']->value->nombre_pelicula;?>
"
                <?php }?>
                required 
            >
        </div>
        <div class="form-group">
            <label for="imagen">direccion de imagen</label>
            <input 
                type="text" 
                class="form-control text-center" 
                name="imagen"
                <?php if ((isset($_smarty_tpl->tpl_vars['movie']->value))) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['movie']->value->imagen;?>
"
                <?php }?>
                required
            >
        </div>
        <div class="form-group">
            <label for="duracion">duracion</label>
            <input 
                type="text" 
                class="form-control text-center" 
                name="duracion"
                <?php if ((isset($_smarty_tpl->tpl_vars['movie']->value))) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['movie']->value->duracion;?>
"
                <?php }?>
                required
            >
        </div>
        <div class="form-group">
            <label for="director">director</label>
            <input 
                type="text" 
                class="form-control text-center" 
                name="director"
                <?php if ((isset($_smarty_tpl->tpl_vars['movie']->value))) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['movie']->value->director;?>
"
                <?php }?>
                required 
            >
        </div>
        <div class="form-group">
            <label for="genero">genero</label>
            <input 
                type="text" 
                class="form-control text-center" 
                name="genero"
                <?php if ((isset($_smarty_tpl->tpl_vars['movie']->value))) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['movie']->value->genero;?>
"
                <?php }?>
                required
            >
        </div>
        <div class="form-group">
            <label for="descripcion">descripcion</label>
            <input 
                type="text" 
                class="form-control text-center" 
                name="descripcion"
                <?php if ((isset($_smarty_tpl->tpl_vars['movie']->value))) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['movie']->value->descripcion;?>
"
                <?php }?>
                required
            >
        </div>
        <button type="submit" class="btn btn-primary mt-3">enviar</button>
    </form>
</div>
<?php }
}
