<?php
/* Smarty version 4.2.1, created on 2022-11-07 15:36:24
  from 'C:\xamp2\htdocs\web_2\TPE\templates\login_by_user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636917e8a66123_48914262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2a07fa3293a390d40de6d980683fe4094921611' => 
    array (
      0 => 'C:\\xamp2\\htdocs\\web_2\\TPE\\templates\\login_by_user.tpl',
      1 => 1667831778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:admin_movies_form.tpl' => 1,
    'file:admin_genres_form.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_636917e8a66123_48914262 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2 class="text-center card bg-warning my-2 py-5">
    bienvenido <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>

</h2>

<?php if ($_SESSION['IS_ADMIN']) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:admin_movies_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:admin_genres_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
        <?php if (!empty($_smarty_tpl->tpl_vars['sellData']->value)) {?>
            <h3 class="card bg-dark text-warning py-5">
                ultimas compras
            </h3>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sellData']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                <ul>
                    <li>id transaccion: <?php echo $_smarty_tpl->tpl_vars['data']->value->id_transaccion;?>
</li>
                    <li>precio: <?php echo $_smarty_tpl->tpl_vars['data']->value->precio_vendido;?>
</li>
                    <li>nombre pelicula: <?php echo $_smarty_tpl->tpl_vars['data']->value->pelicula;?>
</li>
                </ul>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <h2 class="card bg-dark text-warning py-5">
                    todavia no ha realizado ninguna compra
                </h2>
            <?php }
}?>    

<a class="btn bg-warning text-dark text-center my-2 px-5" href="logout">
    logout
</a>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
