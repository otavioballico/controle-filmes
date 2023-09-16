<!DOCTYPE html>
<html>

<head>
    <title>Tela Inicial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./app/css/style.css"> <!-- Vincula o arquivo CSS externo -->
    <link rel="icon" href="./app/Images/icon.png" type="image/png">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="btn-container">
                    <h1>Bem-vindo à Lista de Filmes do Nosso Discord!</h1>
                    <a href="./Views/view_filme.php" class="btn btn-primary btn-sm">Adicionar Filme</a> <!-- Use btn-sm para diminuir o tamanho -->
                    <a href="./Controllers//listegemDeFilmesControler.php" class="btn btn-success btn-sm">Ver Lista de Filmes</a> <!-- Use btn-sm para diminuir o tamanho -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>