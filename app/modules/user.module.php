<?php
    class UserModule{
        private $db;

        public function __construct(){
            $this->db = $this->connectDb();
        }

       function connectDb(){
           $db = new PDO('mysql:host=localhost;'.'dbname=db_showflix;charset=utf8', 'root', '');
           return $db;
       }

        function checkEmail(){
            $query = $this->db->prepare("SELECT * FROM usuarios");
            $query->execute();
            $data = $query->fetchAll(PDO::FETCH_OBJ);
            return $data;
        }

        function insertUser($nombre, $email, $password){
            $query = $this->db->prepare("INSERT INTO usuarios(nombre, email, password) VALUES (?, ?, ?)");
            $query->execute([$nombre, $email, $password]);
        }

        function getOnce($id){
            $query = $this->db->prepare("SELECT * FROM usuarios WHERE id_usuario = $id");
            $query->execute();
            $data = $query->fetch(PDO::FETCH_OBJ);
            return $data;
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