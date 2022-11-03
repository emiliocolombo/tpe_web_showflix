<?php
    include_once 'app/modules/movies.module.php';
    include_once 'app/modules/genres.module.php';
    include_once 'app/views/genres.view.php';
    class GenresController{
        private $module;
        private $view;

        public function __construct(){
            $this->module = new GenresModule();
            $this->view = new GenresView();
        }

        function showGenre($genre){
            $moviesModule = new MoviesModule();
            $movies = $moviesModule->getByGenre($genre);
            $genres = $this->module->getAll();
            $this->view->showGenres($movies, $genres);
        }

        function addGenre(){
            $genre = $_POST['genre'];
            $isatp = $_POST['isatp'];
            $this->module->addGenre($genre, $isatp);
            header("Location: " . BASE_URL . "genre/infantil");
        }
        
        function editGenre($genreName, $newGenreName, $isatp){
            $this->module->editGenre($genreName, $newGenreName, $isatp);
            header("Location: " . BASE_URL . "genre/$newGenreName");
        }

        function showEditForm($genrename){
            if ($genrename != null){
                $genre = $this->module->getOnce($genrename);
                $this->view->showEditForm($genre);
            }
            else{
                header("Location: " . BASE_URL . "home");
            }
        }

        function deleteGenre($genreName){
            $this->module->deleteByName($genreName);
            header("Location: " . BASE_URL . "movies");
        }

        function showWarning($text, $linkTrue, $linkFalse){
            $this->view->showWarning($text, $linkTrue, $linkFalse);
        }
    }
?>