<?php
 require_once './libs/Smarty.class.php';
    
    class GenresView{
        private $smarty;

        function __construct(){
            $this->smarty = new Smarty();
        }

        function showGenres($movies, $genres){
            $this->smarty->assign('basehref', BASE_URL);
            $this->smarty->assign("genres", $genres);
            $this->smarty->assign("movies", $movies);
            $this->smarty->display("genres.tpl");
        }
        
        function showOneGenre($genre, $error = null){
            $this->smarty->assign('basehref', BASE_URL);
            $this->smarty->assign("error", $error);
            $this->smarty->assign("genero", $genre);
            $this->smarty->display("genre.tpl");
        }
        
        function showEditForm($genre){
            $this->smarty->assign('basehref', BASE_URL);
            $this->smarty->assign('genre', $genre);
            $this->smarty->assign('genre', $genre);
            $this->smarty->display('templates/edit_genre.tpl');
        }

        function showWarning($text, $linkTrue, $linkFalse){
            $this->smarty->assign('basehref', BASE_URL);
            $this->smarty->assign('text', $text);
            $this->smarty->assign('linkTrue', $linkTrue);
            $this->smarty->assign('linkFalse', $linkFalse);
            $this->smarty->display('templates/warning.tpl');
        }
    }
?>