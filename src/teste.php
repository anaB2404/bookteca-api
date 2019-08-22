<?php
  include('conexao.php');
  include('livro.php');

  // $conexao = new Conexao();
  //
  // $livroTeste = new Livro();
  // $livroTeste->titulo = "Percy Jackson";
  // $livroTeste->subtitulo = "O ladrão de raios";
  // $livroTeste->descricao = "Um livro muito legal.";
  // $livroTeste->inserirLivro($conexao);

  $resposta = "Você está acessando a API";
  header('Content-Type: application/json');
  header('Access-Control-Allow-Origin: *');
  echo json_encode($resposta)
?>
