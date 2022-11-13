<?php
    include_once 'app/modules/movies.module.php';
    include_once 'app/controllers/stock.controller.php';
    include_once 'app/views/movies.view.php';
    class MoviesController{
        private $module;
        private $view;

        public function __construct(){
            $this->module = new MoviesModule();
            $this->view = new MoviesView();
        }

        function getOnce($id){
            return $this->module->getOnce($id);
        }

        function showMovies(){
            $movies = $this->module->getAll();
            $this->view->showMovies($movies);
        }

        function showOneMovie($idMovie, $error = null){
            $movie = $this->module->getOnce($idMovie);
            $stockController = new StockController();
            $stockData = $stockController->getOnce($idMovie);
            $this->view->showMovie($movie, $stockData, $error);
        }

        function deleteMovie($id){
            $stockController = new StockController();
            $stockController->delete($id);
            $this->module->deleteMovie($id);
            header("Location: " . BASE_URL . "movies");
        }

        function showEditForm($id){
            $movie = $this->module->getOnce($id);
            $this->view->showEditForm($movie);
        }

        function editMovie($id){
            $nombre = $_POST['nombre'];
            $imagen = $_POST['imagen'];
            $duracion = $_POST['duracion'];
            $director = $_POST['director'];
            $genero = $_POST['genero'];
            $descripcion = $_POST['descripcion'];
            $this->module->editMovie($id, $nombre, $imagen, $duracion, $director, $genero, $descripcion); 
            header("Location: " . BASE_URL . "movies");
        }
    
        function addMovie(){
            $nombre = $_POST['nombre'];
            $imagen = $_POST['imagen'];
            $duracion = $_POST['duracion'];
            $director = $_POST['director'];
            $genero = $_POST['genero'];
            $descripcion = $_POST['descripcion'];
            $this->module->addMovie($nombre, $imagen, $duracion, $director, $genero, $descripcion);
            //header("Location: " . BASE_URL . "movies");
        }
    }
?>