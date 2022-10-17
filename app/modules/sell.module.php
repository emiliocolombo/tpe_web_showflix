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

        function addSell($idMovie, $idUser, $precio){
            $query = $this->db->prepare("INSERT INTO ventas (id_pelicula, precio_vendido, id_usuario) VALUES( ?, ?, ?)");
            $query->execute([$idMovie, $precio, $idUser]);
        }

        function getSellsByUserId($id){
            $query = $this->db->prepare("SELECT * FROM ventas WHERE id_usuario = ?");
            $query->execute([$id]);
            $data = $query->fetchAll(PDO::FETCH_OBJ);
            return $data;
        }

    }
?>