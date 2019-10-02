<?php
  include('livro.php');
  include_once('conexao.php');

  $conexao = new Conexao();
  $livro = new Livro();

  $arrayDeLivros = array();
  $resultado = $livro->lerLivros($conexao);
  if($resultado) {
    while($livroTemp = $resultado->fetch_assoc()) {
      $livroObjeto = new Livro();
      $livroObjeto->id = $livroTemp['id'];
      $livroObjeto->titulo = $livroTemp['titulo'];
      $livroObjeto->subtitulo = $livroTemp['subtitulo'];
      $livroObjeto->descricao = $livroTemp['descricao'];
      array_push($arrayDeLivros, $livroObjeto);
    }
    include('cors.php');
    echo json_encode($arrayDeLivros);
  } else {
    http_response_code(404);
  }
 ?>
