<?php
  class Livro {
    var $id;
    var $titulo;
    var $subtitulo;
    var $descricao;

    function inserirLivro($conexao) {
      $conexao->conectar();

      $sql = "insert into livro (titulo, subtitulo, descricao) values ('".$this->titulo."','".$this->subtitulo."','".$this->descricao."')";

      $conexao->con->query($sql);

    }
  }
?>
