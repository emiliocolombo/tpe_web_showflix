<?php
/* Smarty version 4.2.1, created on 2022-10-16 17:42:17
  from 'C:\xamp2\htdocs\web_2\TPE\templates\user_register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c2659e7bee8_89312801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bd7873ea302a1aed517c2077e108356f4294fad' => 
    array (
      0 => 'C:\\xamp2\\htdocs\\web_2\\TPE\\templates\\user_register.tpl',
      1 => 1665934935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634c2659e7bee8_89312801 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
            <div class="alert alert-danger mt-3">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php }?>
        <button type="submit" class="btn btn-primary mt-3">registrarse</button>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
