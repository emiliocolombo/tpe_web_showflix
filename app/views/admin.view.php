<?php
 require_once './libs/Smarty.class.php';
    
    class AdminView{
        private $smarty;

        function __construct(){
            $this->smarty = new Smarty();
        }

        function viewAdminForm($error = null){
            $this->smarty->assign('basehref', BASE_URL);
            $this->smarty->display("admin.tpl");
        }
    }
?>