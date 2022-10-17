<?php
 require_once './libs/Smarty.class.php';
    
    class AuthView{
        private $smarty;

        function __construct(){
            $this->smarty = new Smarty();
        }

        function viewForm($error = null){
            $this->smarty->assign('basehref', BASE_URL);
            $this->smarty->assign("error", $error);
            $this->smarty->display("login.tpl");
        }

        function viewLoginByUser($name, $sellData){
            $this->smarty->assign('basehref', BASE_URL);
            $this->smarty->assign("sellData", $sellData);
            $this->smarty->assign("nombre", $name);
            $this->smarty->display("login_by_user.tpl");
        }
    }
?>