<?php
/* Smarty version 4.2.1, created on 2022-10-17 00:28:45
  from 'C:\xamp2\htdocs\web_2\TPE\templates\movie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c859d11c160_82956976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99a4c202452123e653c607e88aa8ba050c3c057c' => 
    array (
      0 => 'C:\\xamp2\\htdocs\\web_2\\TPE\\templates\\movie.tpl',
      1 => 1665959323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634c859d11c160_82956976 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="card row col-12">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->imagen;?>
" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8 justify-content-center d-flex">
            <div class="card-body row col">
              <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->nombre_pelicula;?>
</h5>
              <p class="card-text justify-content-center d-flex">genero <?php echo $_smarty_tpl->tpl_vars['pelicula']->value->genero;?>
</p>
              <p class="card-text justify-content-center d-flex">duracion: <?php echo $_smarty_tpl->tpl_vars['pelicula']->value->duracion;?>
</p>
              <p class="card-text justify-content-center d-flex">director: <?php echo $_smarty_tpl->tpl_vars['pelicula']->value->director;?>
</p>
              <p class="card-text justify-content-center d-flex">stock: <?php echo $_smarty_tpl->tpl_vars['stockData']->value->cant_copias;?>
</p>
              <p class="card-text justify-content-center d-flex">precio (usd): <?php echo $_smarty_tpl->tpl_vars['stockData']->value->precio_usd;?>
</p>
              <?php if ((isset($_SESSION['IS_LOGGED'])) && !$_SESSION['IS_ADMIN']) {?>
                <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
                    <div class="alert alert-danger mt-3 d-flex justify-content-center align-items-center">
                        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                    </div>
                <?php }?>
                <a class="btn d-flex align-items-center justify-content-center" href="buy/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->id;?>
/<?php echo $_SESSION['USER_ID'];?>
">comprar</a> 
              <?php }?>
              </div>
          </div>
        </div>
      </div> 
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
