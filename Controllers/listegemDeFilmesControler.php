<?php
require_once '../Models/Filme.php'; // Certifique-se de incluir o arquivo da classe Filme

// Crie uma instância da classe Filme
$filme = new Filme();

// Obtenha a lista de filmes com médias
$filmes = $filme->getFilmesComMedias();

include_once '../Views/view_listagem_de_filmes.php';
