<?php
require_once '../Models/Filme.php';
if (isset($_POST['nome_filme'])) {
    $nome = $_POST['nome_filme'];
    $genero = $_POST['genero'];

    $filme = new Filme();
    $filme->setNome($nome);
    $filme->setGenero($genero);
    $filme->insert($nome, $genero);

    // Recupere o ID do filme inserido
    $id_filme = $filme->getId();

    // Inserção das notas e "Inserido Por" individualmente na tabela "notas"
    if (isset($_POST['nota']) && isset($_POST['inserido_por'])) {
        $notas = $_POST['nota'];
        $inseridoPor = $_POST['inserido_por'];

        foreach ($notas as $key => $nota) {
            $nota = floatval($nota);  // Converte a nota de string para número decimal
            $notaInseridoPor = $inseridoPor[$key];  // Obtém o "Inserido Por" correspondente

            $filme->setNota($nota); // Adicione a nota ao filme 
            $filme->setInseridoPor($notaInseridoPor); // Adicione o "Inserido Por" ao filme 
            $filme->inserirNota($nota, $id_filme, $notaInseridoPor); // Insere a nota na tabela 
        }

        // Após inserir todas as notas, calcule a média
        $filme->calcularMedia();
    }

    // Agora você pode redirecionar ou realizar outras ações, se necessário
    header("Location: ../Views/view_filme.php");
}
