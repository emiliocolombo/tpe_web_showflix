<?php
    class AuthModule{
        private $db;

        function __construct(){
            $this->db = $this->connectDb();
        }

        function connectDb(){
            $db = new PDO('mysql:host=localhost;'.'dbname=db_showflix;charset=utf8', 'root', '');
            return $db;
        }


        function getUserById($id){
            $query = $this->db->prepare("SELECT * FROM usuarios WHERE id_usuario = ?");
            $query->execute([$id]);
            $data = $query->fetch(PDO::FETCH_OBJ);
            return $data;
        }
    }
?>