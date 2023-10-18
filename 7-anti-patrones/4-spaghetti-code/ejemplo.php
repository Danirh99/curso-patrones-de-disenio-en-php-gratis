<?php
require 'core.php';
$db = conectarDB();

if(isset($_POST['btn_submit'])){

  $nombre = $_POST['nombre'];
  $correo = $_POST['email'];

  if(validarEmail($email)){

    $consulta = $db->query("SELECT ...");
    while($row = $result->fetch()){
      enviarEmail($row);
    }

  }else{
    mostrarMsg("Email invalido");
  }

}else{

  mostrarFormulario();

}

function mostrarFormulario(){
  // html formulario...
}

function validarEmail(){
  // validacion
}

function enviarEmail(){
  // enviar email
}
