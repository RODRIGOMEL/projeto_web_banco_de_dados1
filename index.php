<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tela de Cadastro</title>
</head>
<body>
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <a class="navbar-brand" href="#">MeuSite</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn btn-outline-success" style="margin: 5px" href="consulta.php?acao=consultar">Consultar</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Seu conteúdo aqui -->

        <!-- Bootstrap JS, Popper.js, e jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <h2>Cadastro</h2>
        <!-- O action envia os dados para a pessoaController-->
        <form method="POST" action="controller/pessoaController.php?acao=inserir">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o seu nome" aria-label="Username">
            </div>
            <br>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o seu endereço" aria-label="Username">
            </div>
            <br>
            <div class="form-group">
                <label for="bairro">Bairro:</label>
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o seu bairro" aria-label="Username">
            </div>
            <br>
            <div class="form-group">
                <label for="cep">CEP:</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite o seu CEP" aria-label="Username">
            </div>
            <br>
            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite a sua cidade" aria-label="Username">
            </div>
            <br>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" class="form-control" id="estado" name="estado" placeholder="Digite o seu estado" aria-label="Username">
            </div>
            <br>
            <div class="form-group">
                <label for="tel">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o seu telefone" aria-label="Username">
            </div>
            <br>
            <div class="form-group">
                <label for="cel">Celular:</label>
                <input type="text" class="form-control" id="celular" name="celular" placeholder="Digite o seu celular" aria-label="Username">
            </div>
            <br>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </form>
    </div>
</body>
</html>