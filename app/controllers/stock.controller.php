<?php
    include_once 'app/modules/stock.module.php';
    include_once 'app/views/stock.view.php';
    include_once 'app/helpers/auth.helper.php';
    
    class StockController{
        private $module;
        private $view;
        function __construct(){
            $this->module = new StockModule();
            $this->view = new StockView();
        }

        function checkStock($movieId){
            $stockData = $this->module->getOnce($movieId);
            if ($stockData->cant_copias <= 0){
                header("Location: " . BASE_URL . "outofstock/$movieId");
                die();
            }
        }

        function decrementStock($idMovie){
            $stockData =$this->getOnce($idMovie); 
            $this->module->decrementStock($idMovie, $stockData);
        }

        function getOnce($id){
            return $this->module->getOnce($id);
        }
    }

?>