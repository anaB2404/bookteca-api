<?php
  include('conexao.php');
  include('livro.php');

  $livroTeste = new Livro();
  $livroTeste->titulo = "Percy Jackson";
  $livroTeste->subtitulo = "O ladrão de raios";
  $livroTeste->descricao = "Um livro muito legal.";
  $livroTeste->inserirLivro($conexao);
?>
