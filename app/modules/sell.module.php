<?php
    class SellModule{
        private $db;

        public function __construct(){
            $this->db = $this->connectDb();
        }

        function connectDb(){
           $db = new PDO('mysql:host=localhost;'.'dbname=db_showflix;charset=utf8', 'root', '');
           return $db;
        }

        function addSell($idUser, $precio, $nombrePelicula){
            $query = $this->db->prepare("INSERT INTO ventas (precio_vendido, id_usuario, pelicula) VALUES( ?, ?, ?)");
            $query->execute([$precio, $idUser, $nombrePelicula]);
        }

        function getSellsByUserId($id){
            $query = $this->db->prepare("SELECT * FROM ventas WHERE id_usuario = ?");
            $query->execute([$id]);
            $data = $query->fetchAll(PDO::FETCH_OBJ);
            return $data;
        }

    }
?>