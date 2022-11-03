<?php
    class GenresModule{
        private $db;

        public function __construct(){
            $this->db = $this->connectDb();
        }

       function connectDb(){
           $db = new PDO('mysql:host=localhost;'.'dbname=db_showflix;charset=utf8', 'root', '');
           return $db;
       }

        function getAll(){
            $query = $this->db->prepare("SELECT * FROM generos");
            $query->execute();
            $data = $query->fetchAll(PDO::FETCH_OBJ);
            return $data;
        }

        function getOnce($genreName){
           $query = $this->db->prepare("SELECT * FROM generos WHERE genero = ?");
           $query->execute([$genreName]);
           $data = $query->fetch(PDO::FETCH_OBJ);
           return $data;
        }

        function addGenre($genre, $isatp){
            $query = $this->db->prepare("INSERT INTO generos (genero, atp) VALUES (?, ?);");
            $query->execute([$genre, $isatp]);
        }
        
        function editGenre($genreName, $newGenreName, $isatp){
            $query = $this->db->prepare("UPDATE generos SET genero = ?, atp = ? WHERE genero = ?");
            $query->execute([$newGenreName, $isatp, $genreName]);
        }
    
        function deleteByName($name){
            $query = $this->db->prepare('DELETE FROM generos WHERE genero = ?');
            $query->execute([$name]);
        }
    }
?>