<?php
// Identifica los anti-patrones en el siguiente código PHP y los problemas que generan:
class Usuarios {

    public $db;
  
    public function __construct() {
      $this->db = new DB();
    }
  
    public function obtenerListado() {
  
      $query = "SELECT * FROM usuarios";
      $result = $this->db->query($query);
  
      $listado = [];
      while($row = $result->fetch()) {
        $listado[] = $row;
      }
  
      return $listado;
  
    }
  
    public function crearUsuario($nombre, $email) {
  
  // Validaciones
      if(empty($nombre)) {
        throw new Exception("El nombre es obligatorio");
      }
  
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("El email no es válido");
      }
  
  // Insertar usuario
      $query = "INSERT INTO usuarios VALUES ($nombre, $email)";
      $this->db->execute($query);
  
    }
  
  }
  