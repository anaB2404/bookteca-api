<?php
  include_once("conexao.php");
  include("livro.php");
  $conexao = new Conexao();
  $livro = new Livro();
  $livro->titulo = $_POST['titulo'];
  $livro->subtitulo = $_POST['subtitulo'];
  $livro->descricao = $_POST['descricao'];
  $livro->inserirLivro($conexao);
  include("cors.php");
  http_response_code(500)
?>
