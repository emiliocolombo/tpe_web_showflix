<?php
    class AuthHelper {
        public function __construct(){
            if (!isset($_SESSION['USER_ID'])){    
                session_start();
            }
        }

        public function checkLoggedIn() {
            if (!isset($_SESSION['IS_LOGGED'])) {
               header("Location: " . BASE_URL . 'login/error de autenticacion en los datos');
               die();
            }
        }

        public function checkAdmin(){
            if ($_SESSION['IS_ADMIN'] == 0){
                header("Location: " . BASE_URL . "autherr/lo siento, usted no es un usuario administrador");
                die();
            }
        } 
    }
   
?>