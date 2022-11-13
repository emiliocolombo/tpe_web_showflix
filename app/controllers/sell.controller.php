<?php
    include_once 'app/modules/sell.module.php';
    include_once 'app/views/sell.view.php';
    include_once 'app/helpers/auth.helper.php';
    include_once 'app/controllers/stock.controller.php';
    include_once 'app/controllers/movies.controller.php';
    include_once 'app/controllers/user.controller.php';
    
    class SellController{
        private $module;
        private $view;
        function __construct(){
            $this->module = new SellModule();
            $this->view = new SellView();
        }

        function getSellsByUserId($id){
            return $this->module->getSellsByUserId($id);
        }
    
        function addSell($movieId, $userId){
            $moviesController = new MoviesController; 
            $movie = $moviesController->getOnce($movieId);
            $stockController = new StockController();
            $stockController->checkStock($movieId);
            $stockData = $stockController->getOnce($movieId);
            $this->module->addSell($userId, $stockData->precio_usd, $movie->nombre_pelicula);
            $stockController->decrementStock($movieId);
            header("Location: " . BASE_URL . "compra_realizada/$userId");
        }

        function viewCompra($userId){
            $userController = new UserController();
            $user = $userController->getOnce($userId);
            $this->view->viewCompra($user->nombre);
        }
    }

?>