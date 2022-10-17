<?php
 require_once './libs/Smarty.class.php';
    
    class GenresView{
        private $smarty;

        function __construct(){
            $this->smarty = new Smarty();
        }

        function showGenres($genres){
            $this->smarty->assign('basehref', BASE_URL);
            $this->smarty->assign("genres", $genres);
            $this->smarty->display("genres.tpl");
        }
        
        function showOneGenre($genre, $error = null){
            $this->smarty->assign('basehref', BASE_URL);
            $this->smarty->assign("error", $error);
            $this->smarty->assign("genero", $genre);
            $this->smarty->display("genre.tpl");
        }
    }
?>