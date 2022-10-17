<?php
    include_once 'app/modules/user.module.php';
    include_once 'app/views/user.view.php';
    include_once 'app/helpers/auth.helper.php';
    
    class UserController{
        private $module;
        private $view;
        function __construct(){
            $this->module = new UserModule();
            $this->helper = new AuthHelper();
            $this->view = new UserView();
        }

        function checkEmail(){
            $users =$this->module->checkEmail();
            $email = $_POST['email'];
            foreach ($users as $user) {
                if ($email == $user->email){
                    header("Location: " . BASE_URL . 'registererr');
                    die();
                }
            }
        }

        function showRegister($error = null){
            $this->view->showRegister($error);
        }

        function insertUser(){
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $this->module->insertUser($nombre, $email, $hash);
            header("Location: " . BASE_URL . 'login');
        }

        function getOnce($id){
            return $this->module->getOnce($id);
        }
    }

?>