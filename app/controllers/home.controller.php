<?php
    include_once 'app/modules/movies.module.php';
    include_once 'app/views/home.view.php';
    class HomeController{
        private $module;
        private $view;

        public function __construct(){
            $this->module = new MoviesModule();
            $this->view = new HomeView();
        }

        function showHome(){
            $movies = $this->module->getAll();
            $this->view->showHome($movies);
        }
    }
?>