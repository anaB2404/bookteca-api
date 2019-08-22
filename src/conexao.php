<?php
  class Conexao {
    var $con;

    function conectar() {
      $this->con = new mysqli("localhost", "root", "usbw", "bookteca-db");
      if($this->con->connect_error) die("Falha ao conectar com o banco.");
    }
  }
?>
