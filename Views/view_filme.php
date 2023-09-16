<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Filme</title>
    <!-- Inclua as bibliotecas CSS do Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./app/css/style.css"> <!-- Vincula o arquivo CSS externo -->
    <link rel="icon" href="../app/Images/icon.png" type="image/png">
</head>

<body>

    <div class="container">
        <h1>Adicionar Filme</h1>
        <!-- Seu formulário HTML -->
        <form action="../Controllers/filmeControler.php" method="POST" id="login-form">
            <div class="mb-3">
                <label for="nome_filme" class="input-text">Nome do Filme</label>
                <input type="text" class="form-control" id="nome_filme" name="nome_filme" required>
            </div>
            <div class="mb-3">
                <label for="genero" class="form-label">Gênero</label>
                <input type="text" class="form-control" id="genero" name="genero" required>
            </div>
            <div class="mb-3">
                <label for="notas" class="form-label">Adicione Notas (de 1 a 10):</label>
                <div id="nota-container">
                    <div class="mb-2">
                        <input type="number" class="form-control" name="nota[]" step="0.1" min="0" max="10" placeholder="Digite uma nota (de 0 a 10)" required>
                        <input type="text" class="form-control mt-2" name="inserido_por[]" placeholder="Inserido Por" required>
                    </div>
                </div><br>
                <button type="button" class="btn btn-primary ml-2" id="add-nota">Adicionar Nota</button>
            </div>
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary" style="background-color: green;">Adicionar Filme</button>
                <a href="../index.php" class="btn btn-primary ml-2" style="background-color: darkred;">Voltar</a>
            </div>


    </div>
    <!-- Inclua as bibliotecas JavaScript do Bootstrap -->

    <!-- Vincule o arquivo JavaScript externo -->
    <script>

    </script>
    <script src="../app/script/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-Ct9r9W5w5j5I2L/Ij8jnEmo8k2pE8yK5g6Jz7F5w5tL5l9AMN9pAn5F5h5f5F5N5S5u5T5x5P5C5W5b5I5f5F5e5d5B5L5E5L5v5A==" crossorigin="anonymous"></script>

</body>

</html>