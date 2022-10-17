<?php
/* Smarty version 4.2.1, created on 2022-10-16 21:10:20
  from 'C:\xamp2\htdocs\web_2\TPE\templates\genres.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c571cc16226_41737746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '318997da1d4423a18f188836488f5e58840418fb' => 
    array (
      0 => 'C:\\xamp2\\htdocs\\web_2\\TPE\\templates\\genres.tpl',
      1 => 1665947395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634c571cc16226_41737746 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class="w-100 text-center">generos</h1>
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs d-flex justify-content-center">
      <li class="nav-item">
        <a class="nav-link" aria-current="true" href="genre/infantil">infantil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="genre/terror">terror</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="genre/nacional">nacional</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="genre/comedia">comedia</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="genre/cienciaficcion">ciencia ficcion</a>
      </li>
      
    </ul>
  </div>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genres']->value, 'genre');
$_smarty_tpl->tpl_vars['genre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
$_smarty_tpl->tpl_vars['genre']->do_else = false;
?>
    <div class="card-body">
        <div class="card">
            <h5 class="card-header bg-warning"><?php echo $_smarty_tpl->tpl_vars['genre']->value->nombre_pelicula;?>
</h5>
            <div class="card-body">
                <img class="img-fluid rounded w-25" src="<?php echo $_smarty_tpl->tpl_vars['genre']->value->imagen;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['genre']->value->nombre_pelicula;?>
">
                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['genre']->value->genero;?>
</h5>
                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['genre']->value->descripcion;?>
</p>
                <a href="movie/<?php echo $_smarty_tpl->tpl_vars['genre']->value->id;?>
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
