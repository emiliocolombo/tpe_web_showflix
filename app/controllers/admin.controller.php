<?php
    include_once 'app/modules/movies.module.php';
    include_once 'app/views/admin.view.php';
    class AdminController{
        private $module;
        private $view;

        public function __construct(){
            $this->module = new MoviesModule();
            $this->view = new AdminView();
        }

        function showAdminForm(){
            $this->view->viewAdminForm();
        }
    }
?>