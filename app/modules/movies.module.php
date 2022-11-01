<?php
    class MoviesModule{
        private $db;

        public function __construct(){
            $this->db = $this->connectDb();
        }

       function connectDb(){
           $db = new PDO('mysql:host=localhost;'.'dbname=db_showflix;charset=utf8', 'root', '');
           return $db;
       }

        function getAll(){
            $query = $this->db->prepare("SELECT * FROM peliculas");
            $query->execute();
            $data = $query->fetchAll(PDO::FETCH_OBJ);
            return $data;
        }

        function getOnce($id){
           $query = $this->db->prepare("SELECT * FROM peliculas WHERE id = $id");
           $query->execute();
           $data = $query->fetch(PDO::FETCH_OBJ);
           return $data;
        }

        function deleteMovie($id){
            $query = $this->db->prepare('DELETE FROM peliculas WHERE id = ?');
            $query->execute([$id]);
            echo $id;
        }

        function editMovie($id, $nombre, $imagen, $duracion, $director, $genero, $descripcion){
            $query = $this->db->prepare("UPDATE peliculas SET nombre_pelicula = ?, imagen = ?, duracion = ?, director = ?, genero = ?, descripcion = ?  WHERE id = ?");
            $query->execute([$nombre, $imagen, $duracion, $director, $genero, $descripcion, $id]);
        }

        function getAllGenre($genre){
            $query = $this->db->prepare("SELECT * FROM peliculas WHERE genero = ?");
            $query->execute([$genre]);
            $data = $query->fetchAll(PDO::FETCH_OBJ);
            return $data;
        }

        function addMovie($nombre, $imagen, $duracion, $director, $genero, $descripcion){
            $query = $this->db->prepare("INSERT INTO peliculas (nombre_pelicula, imagen, duracion, director, genero, descripcion) VALUES (?, ?, ?, ?, ?, ?);");
            $query->execute([$nombre, $imagen, $duracion, $director, $genero, $descripcion]);
        }
    }
?>