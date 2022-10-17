<?php
/* Smarty version 4.2.1, created on 2022-10-08 17:57:15
  from 'C:\xamp2\htdocs\web_2\TPE\templates\genre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63419ddba71791_91612159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecaef988e497449fea239d830c32ed31300ff59f' => 
    array (
      0 => 'C:\\xamp2\\htdocs\\web_2\\TPE\\templates\\genre.tpl',
      1 => 1665244618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63419ddba71791_91612159 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>hola genero <?php echo $_smarty_tpl->tpl_vars['genero']->value;?>
</h1>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
