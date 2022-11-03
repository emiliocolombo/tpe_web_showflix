<?php
/* Smarty version 4.2.1, created on 2022-11-04 00:41:22
  from 'C:\xamp2\htdocs\web_2\TPE\templates\movies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636451a20494b5_99801219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11f88612733bd68c1c493c92ec6740ef0d8988aa' => 
    array (
      0 => 'C:\\xamp2\\htdocs\\web_2\\TPE\\templates\\movies.tpl',
      1 => 1667518837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_636451a20494b5_99801219 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="row w-100 d-flex justify-content-center p-2">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['peliculas']->value, 'pelicula');
$_smarty_tpl->tpl_vars['pelicula']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pelicula']->value) {
$_smarty_tpl->tpl_vars['pelicula']->do_else = false;
?>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->imagen;?>
" class="img-fluid rounded" alt="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->nombre_pelicula;?>
">
          </div>
          <div class="col-md-8 justify-content-center d-flex">
            <div class="card-body row col">
              <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->nombre_pelicula;?>
</h5>
              <p class="card-text justify-content-center d-flex"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->genero;?>
</p>
              <a class="justify-content-center align-items-center d-flex btn" href="movie/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->id;?>
">mas info</a>
              <?php if ((isset($_SESSION['IS_LOGGED'])) && $_SESSION['IS_ADMIN']) {?>
                <a class="btn" href="delete_movie/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->id;?>
">eliminar</a> 
                <a class="btn" href="formeditmovie/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->id;?>
">editar</a> 
              <?php }?>
              </div>
          </div>
        </div>
      </div> 
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>




<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
