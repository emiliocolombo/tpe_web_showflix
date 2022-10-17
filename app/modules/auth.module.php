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

        function getUserByMail($email){
            $query = $this->db->prepare("SELECT * FROM usuarios WHERE email = ?");
            $query->execute([$email]);
            $data = $query->fetch(PDO::FETCH_OBJ);
            return $data;
        }

        function getUserById($id){
            $query = $this->db->prepare("SELECT * FROM usuarios WHERE id_usuario = ?");
            $query->execute([$id]);
            $data = $query->fetch(PDO::FETCH_OBJ);
            return $data;
        }
    }
?>