<?php

    require_once 'libs/Smarty.class.php';
    class HomeView{
        private $smarty;

        public function __construct(){
            $this->smarty = new Smarty();
        }

        public function showHome($movies){
            $this->smarty->assign('basehref', BASE_URL);
            $this->smarty->assign('movies', $movies);
            $this->smarty->display('templates/home.tpl');
        }
    }
?>