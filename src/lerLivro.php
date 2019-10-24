<?php
  include_once('conexao.php');
  include('livro.php');

  $conexao = new Conexao();

  $livroTemporario = new Livro();
  $livroTemporario->id = $_GET["id"];
  $resultado = $livroTemporario->lerLivro($conexao);
  $livroJson = "";



  if ($resultado) {
    while ($livroLaco = $resultado->fetch_assoc()) {
      $livroObjeto = new Livro();
      $livroObjeto->id = $livroTemporario->id;
      $livroObjeto->titulo = $livroLaco['titulo'];
      $livroObjeto->subtitulo = $livroLaco['subtitulo'];
      $livroObjeto->descricao = $livroLaco['descricao'];
      $livroJson = json_encode($livroObjeto);
    }

    include('cors.php');
    echo $livroJson;
  }else {
    http_response_code(404);
  }

 ?>
