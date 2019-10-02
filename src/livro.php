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

    function lerLivros($conexao) {
      $conexao->conectar();
      $sql = "select * from livro";
      $livrosRetornados = $conexao->con->query($sql);

      if($livrosRetornados->num_rows > 0) {
        return $livrosRetornados;
      } else {
        return false;
      }

    }
  }
?>
