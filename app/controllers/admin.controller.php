<?php
    include_once 'app/modules/movies.module.php';
    include_once 'app/views/admin.view.php';
    class AdminController{
        private $module;
        private $view;
        private $authHelper;

        public function __construct(){
            $this->module = new MoviesModule();
            $this->view = new AdminView();
            $this->$authHelper = new AuthHelper();
        }

        function showAdminForm(){
            $this->view->viewAdminForm();
        }
    }
?>