<?php

    require_once 'libs/Smarty.class.php';
    class MoviesView{
        private $smarty;

        public function __construct(){
            $this->smarty = new Smarty();
        }

        public function showMovies($movies){
            $this->smarty->assign('basehref', BASE_URL);
            $this->smarty->assign('pagina', 'peliculas');
            $this->smarty->assign('peliculas', $movies);
            $this->smarty->display('templates/movies.tpl');
        }

        public function showMovie($movie, $stockData, $error){
            $this->smarty->assign('basehref', BASE_URL);
            $this->smarty->assign('pagina', 'peliculas');
            $this->smarty->assign('pelicula', $movie);
            $this->smarty->assign('error', $error);
            $this->smarty->assign('stockData', $stockData);
            $this->smarty->display('templates/movie.tpl');
        }

        public function showEditForm($id){
            $this->smarty->assign('basehref', BASE_URL);
            $this->smarty->assign('id', $id);
            $this->smarty->display('templates/edit_movie.tpl');
        }
    }
?>