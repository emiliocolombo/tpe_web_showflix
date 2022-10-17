<?php
/* Smarty version 4.2.1, created on 2022-10-16 16:01:18
  from 'C:\xamp2\htdocs\web_2\TPE\templates\sold.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c0eae626bb4_28308997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7e3d04579fe79c87f51786ca4eb8368569deb82' => 
    array (
      0 => 'C:\\xamp2\\htdocs\\web_2\\TPE\\templates\\sold.tpl',
      1 => 1665927764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634c0eae626bb4_28308997 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>felicitaciones <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
, la compra se ha realizado con exito</h1>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
