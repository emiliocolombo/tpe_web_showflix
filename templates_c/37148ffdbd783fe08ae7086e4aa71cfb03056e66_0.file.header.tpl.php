<?php
/* Smarty version 4.2.1, created on 2022-10-16 21:10:18
  from 'C:\xamp2\htdocs\web_2\TPE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c571aafa703_74516251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37148ffdbd783fe08ae7086e4aa71cfb03056e66' => 
    array (
      0 => 'C:\\xamp2\\htdocs\\web_2\\TPE\\templates\\header.tpl',
      1 => 1665947414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c571aafa703_74516251 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>TUDAI - TodoList</title>
</head>
<body>
    <header>
        <nav class="row navbar navbar-expand-lg bg-warning">
            <div class="row">
              <a class="navbar-brand col-2 text-center" href="home">
                ShowFlix
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse col-9" id="navbarNav">
                <ul class="navbar-nav col-12">
                  <li class="col-3 nav-item bg-light card mx-1 text-center">
                    <a class="nav-link" aria-current="page" href="home">home</a>
                  </li>
                  <li class="col-3 nav-item bg-light card mx-1 text-center">
                    <a class="nav-link" aria-current="page" href="movies">peliculas</a>
                  </li>
                  <li class="col-3 nav-item bg-light card mx-1 text-center">
                    <a class="nav-link" aria-current="page" href="genre/infantil">generos</a>
                  </li>
                  <?php if (!(isset($_SESSION['USER_ID']))) {?>
                    <li class="col-3 nav-item bg-light card mx-1 text-center">
                      <a class="nav-link" aria-current="page" href="login">login</a>
                    </li>
                  <?php } else { ?> 
                    <li class="col-3 nav-item bg-light card mx-1 text-center">
                      <a class="nav-link" aria-current="page" href="logged">logout (<?php echo $_SESSION['USER_NAME'];?>
)</a>
                    </li>
                  <?php }?>
                </ul>
              </div>
            </div>
          </nav>
    </header>

    <!-- inicio main container -->
    <main class="container text-center"><?php }
}
