<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Filmes</title>
    <!-- Inclua o Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Inclua o Font Awesome para ícones (opcional) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Inclua o CSS personalizado -->
    <link rel="icon" href="../app/Images/icon.png" type="image/png">
    <link rel="stylesheet" href="./app/css/style2.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center text-primary mb-4">Lista de Filmes</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nome do Filme</th>
                        <th scope="col">Gênero</th>
                        <th scope="col">Média</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($filmes as $filme) : ?>
                        <tr>
                            <td><?php echo $filme['nome_filme']; ?></td>
                            <td><?php echo $filme['genero']; ?></td>
                            <td>
                                <span class="rating"><?php echo number_format($filme['media'], 1); ?></span>
                                <?php
                                if ($filme['media'] >= 8.0) {
                                    echo '<i class="fas fa-star text-warning"></i>';
                                } elseif ($filme['media'] >= 6.0) {
                                    echo '<i class="fas fa-star-half-alt text-warning"></i>';
                                } else {
                                    echo '<i class="far fa-star text-warning"></i>';
                                }
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- Botão de Voltar -->
        <a href="#" class="btn btn-primary btn-lg" onclick="history.go(-1); return false;">Voltar</a>
    </div>


    <!-- Inclua o Bootstrap JS (opcional, se necessário) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>