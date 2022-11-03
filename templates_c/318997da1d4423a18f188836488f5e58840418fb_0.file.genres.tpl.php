<?php
/* Smarty version 4.2.1, created on 2022-11-02 22:29:35
  from 'C:\xamp2\htdocs\web_2\TPE\templates\genres.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6362e13f3da8f7_84902413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '318997da1d4423a18f188836488f5e58840418fb' => 
    array (
      0 => 'C:\\xamp2\\htdocs\\web_2\\TPE\\templates\\genres.tpl',
      1 => 1667424515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6362e13f3da8f7_84902413 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class="w-100 text-center">generos</h1>
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs d-flex justify-content-center">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genres']->value, 'genre');
$_smarty_tpl->tpl_vars['genre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
$_smarty_tpl->tpl_vars['genre']->do_else = false;
?>
      <li class="nav-item px-2">
        <div class="card px-2">
          <a class="nav-link" aria-current="true" href="genre/<?php echo $_smarty_tpl->tpl_vars['genre']->value->genero;?>
"><?php echo $_smarty_tpl->tpl_vars['genre']->value->genero;?>
</a>
          <?php if ((isset($_SESSION['IS_LOGGED'])) && $_SESSION['IS_ADMIN']) {?>
            <a class="nav-link text-danger" aria-current="true" href="warning_delete_genre/<?php echo $_smarty_tpl->tpl_vars['genre']->value->genero;?>
">eliminar</a>
            <a class="nav-link text-dark" aria-current="true" href="formeditgenre/<?php echo $_smarty_tpl->tpl_vars['genre']->value->genero;?>
">editar</a>
          <?php }?>  
        </div>
      </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      
    </ul>
  </div>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movies']->value, 'movie');
$_smarty_tpl->tpl_vars['movie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['movie']->value) {
$_smarty_tpl->tpl_vars['movie']->do_else = false;
?>
    <div class="card-body">
        <div class="card">
            <h5 class="card-header bg-warning"><?php echo $_smarty_tpl->tpl_vars['movie']->value->nombre_pelicula;?>
</h5>
            <div class="card-body">
                <img class="img-fluid rounded w-25" src="<?php echo $_smarty_tpl->tpl_vars['movie']->value->imagen;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['movie']->value->nombre_pelicula;?>
">
                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['movie']->value->genero;?>
</h5>
                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['movie']->value->descripcion;?>
</p>
                <a href="movie/<?php echo $_smarty_tpl->tpl_vars['movie']->value->id;?>
" class="btn btn-primary">mas info</a>
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
