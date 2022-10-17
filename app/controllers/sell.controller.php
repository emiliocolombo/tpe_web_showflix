<?php
    include_once 'app/modules/sell.module.php';
    include_once 'app/views/sell.view.php';
    include_once 'app/helpers/auth.helper.php';
    
    class SellController{
        private $module;
        private $view;
        function __construct(){
            $this->module = new SellModule();
            $this->helper = new AuthHelper();
            $this->view = new SellView();
        }

        function getSellsByUserId($id){
            return $this->module->getSellsByUserId($id);
        }
    
        function addSell($movieId, $userId){
            include_once 'app/controllers/stock.controller.php';
            $stockController = new StockController();
            $stockController->checkStock($movieId);
            $stockData = $stockController->getOnce($movieId);
            $this->module->addSell($movieId, $userId, $stockData->precio_usd);
            $stockController->decrementStock($movieId);
            header("Location: " . BASE_URL . "compra_realizada/$userId");
        }

        function viewCompra($userId){
            include_once 'app/controllers/user.controller.php';
            $userController = new UserController();
            $user = $userController->getOnce($userId);
            $this->view->viewCompra($user->nombre);
        }
    }

?>