<?php
    include_once 'app/modules/auth.module.php';
    include_once 'app/views/auth.view.php';
    include_once 'app/helpers/auth.helper.php';
    
    class AuthController{
        private $module;
        private $view;
        function __construct(){
            $this->module = new UserModule();
            $this->view = new AuthView();
            $this->helper = new AuthHelper();
        }

        function viewForm(){
            $this->view->viewForm();
        }

        function viewFormAndError($error){
            $this->view->viewForm($error);
        }

        function validateData(){
            $email = $_POST['email'];
            echo $email;
            $password = $_POST['password'];
            $user = $this->module->getUserByMail($email);
            echo $user->email;
            var_dump($user);
            if ($user && password_verify($password, $user->password)){
                $_SESSION['USER_ID'] = $user->id_usuario;
                $_SESSION['IS_LOGGED'] = true;
                $_SESSION['IS_ADMIN'] = $user->es_admin;
                $_SESSION['USER_NAME'] = $user->nombre;
                header("Location: " . BASE_URL . "logged");
            }
            else {
                header("Location: " . BASE_URL . "autherr/error de autenticacion en los datos");
            }
        }

        function showLoginByUser(){
            $id = $_SESSION['USER_ID'];
            $user = $this->module->getUserById($id);
            $sellControlller = new SellController();
            $sellData = $sellControlller->getSellsByUserId($id);
            $this->view->viewLoginByUser($user->nombre, $sellData);
        }

        function checkLoggedIn(){
            $this->helper->checkLoggedIn();
        }

        function checkAdmin(){
            $this->helper->checkAdmin();
        }

        function logout() {
            session_destroy();
            header("Location: " . BASE_URL);
        }
    
    }

?>