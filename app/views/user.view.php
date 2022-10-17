<?php

    require_once 'libs/Smarty.class.php';
    class UserView{
        private $smarty;

        public function __construct(){
            $this->smarty = new Smarty();
        }

        public function showRegister($error){
            $this->smarty->assign('basehref', BASE_URL);
            $this->smarty->assign('error', $error);
            $this->smarty->display('templates/user_register.tpl');
        }

        public function showMovie($movie){
            $this->smarty->assign('basehref', BASE_URL);
            $this->smarty->assign('pagina', 'peliculas');
            $this->smarty->assign('pelicula', $movie);
            $this->smarty->display('templates/movie.tpl');
        }
    }
?>