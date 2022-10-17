<?php
/* Smarty version 4.2.1, created on 2022-10-17 14:49:33
  from 'C:\xamp2\htdocs\web_2\TPE\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d4f5d6df580_56244021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a81fe468be9b8b3dc175fca3543be7df7ca15b35' => 
    array (
      0 => 'C:\\xamp2\\htdocs\\web_2\\TPE\\templates\\home.tpl',
      1 => 1666010968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634d4f5d6df580_56244021 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="w-100 m-4">
    <div class="row col-12 my-3">
        <div class="card-group col-12 card bg-warning">
            <h2 class="text-center w-100">
                para los amantes del terror
            </h2>
        </div>
        <div class="card-group">
            <?php $_smarty_tpl->_assignInScope('i', 0);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movies']->value, 'movie');
$_smarty_tpl->tpl_vars['movie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['movie']->value) {
$_smarty_tpl->tpl_vars['movie']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['movie']->value->genero == 'terror') {?>
                    <div class="card col-4">
                        <div class="d-flex justify-content-center">                    
                            <img src="<?php echo $_smarty_tpl->tpl_vars['movie']->value->imagen;?>
" class="img-fluid rounded w-50" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['movie']->value->nombre_pelicula;?>
</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer btn btn-warning rounded">
                            <a class="text-decoration-none text-dark" href="movie/<?php echo $_smarty_tpl->tpl_vars['movie']->value->id;?>
">
                                mas info
                            </a>
                        </div>
                    </div>
                    <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['i']->value == 3) {?>
                    <?php break 1;?>
                <?php ob_start();
}
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <div class="row col-12 my-3">
        <div class="card-group col-12 card bg-warning">
            <h2 class="text-center w-100">
                para ver en familia
            </h2>
        </div>
        <div class="card-group">
            <?php $_smarty_tpl->_assignInScope('i', 0);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movies']->value, 'movie');
$_smarty_tpl->tpl_vars['movie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['movie']->value) {
$_smarty_tpl->tpl_vars['movie']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['movie']->value->genero == 'infantil') {?>
                    <div class="card col-4">
                        <div class="d-flex justify-content-center">                    
                            <img src="<?php echo $_smarty_tpl->tpl_vars['movie']->value->imagen;?>
" class="img-fluid rounded w-50" alt="...">
                        </div>                        <div class="card-body">
                            <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['movie']->value->nombre_pelicula;?>
</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer btn btn-warning rounded">
                            <a class="text-decoration-none text-dark w-100 text-center" href="movie/<?php echo $_smarty_tpl->tpl_vars['movie']->value->id;?>
">
                                mas info
                            </a>
                        </div>
                    </div>
                    <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['i']->value == 3) {?>
                    <?php break 1;?>
                <?php ob_start();
}
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <div class="row col-12 my-3">
        <div class="card-group col-12 card bg-warning">
            <h2 class="text-center w-100">
                para llorar de la risa!!
            </h2>
        </div>
        <div class="card-group text-center">
            <?php $_smarty_tpl->_assignInScope('i', 0);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movies']->value, 'movie');
$_smarty_tpl->tpl_vars['movie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['movie']->value) {
$_smarty_tpl->tpl_vars['movie']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['movie']->value->genero == 'comedia') {?>
                    <div class="card col-4">
                        <div class="d-flex justify-content-center">                    
                            <img src="<?php echo $_smarty_tpl->tpl_vars['movie']->value->imagen;?>
" class="img-fluid rounded w-50" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['movie']->value->nombre_pelicula;?>
</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer btn btn-warning rounded">
                            <a class="text-decoration-none text-dark" href="movie/<?php echo $_smarty_tpl->tpl_vars['movie']->value->id;?>
">
                                mas info
                            </a>
                        </div>
                    </div>
                    <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['i']->value == 3) {?>
                    <?php break 1;?>
                <?php ob_start();
}
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
