<?php

    require_once 'libs/Smarty.class.php';
    class SellView{
        private $smarty;

        public function __construct(){
            $this->smarty = new Smarty();
        }

        function viewCompra($name){
            $this->smarty->assign('basehref', BASE_URL);
            $this->smarty->assign('name', $name);
            $this->smarty->display('templates/sold.tpl');
        }
    }
?>