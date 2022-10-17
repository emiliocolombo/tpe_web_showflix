<?php
    include_once 'app/modules/movies.module.php';
    include_once 'app/views/genres.view.php';
    class GenresController{
        private $module;
        private $view;

        public function __construct(){
            $this->module = new MoviesModule();
            $this->view = new GenresView();
        }

        function showGenre($genre){
            $movies = $this->module->getAllGenre($genre);
            $this->view->showGenres($movies);
        }

        function showOneGenre($idGenre){
            //$movie = $this->module->getOnce($idMovie);
            $this->view->showOneGenre($idGenre);
        }
    }
?>