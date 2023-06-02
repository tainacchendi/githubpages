<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JV INFO - Início</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>
        body {
            background-image: url("imagem1.png.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            font-family: "Arial", sans-serif;
        }
        .navbar {
            background-color: blue !important;
        }


        .navbar-brand img {
            max-height: 30px;
            margin-right: 10px;
        }

        .navbar-nav .nav-link {
            color: white;
        }

        .navbar-nav .nav-link:hover {
            color: white;
        }

        .jumbotron {
            background-color: rgba(255, 255, 255, 0.7);
            padding: 2rem;
            margin-top: 100px;
            text-align: center;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .jumbotron h1 {
            font-size: 3rem;
            font-family: "Calibri", sans-serif;
            text-align: justify;
        }

        .jumbotron p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            font-family: "Calibri", sans-serif;
            text-align: justify;
        }

        .jumbotron .btn {
            font-size: 1.2rem;
            padding: 10px 30px;
            margin-top: 20px;
            font-family: "Arial", sans-serif;
        }
    </style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <img src="download.png" alt="Logo da JV INFO" class="img-fluid" style="max-width: 70px;">
        <a class="navbar-brand text-white" href="#">JV INFO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="inicio.php">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php">Quem somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="nossos objetivos.php">Nossos Objetivos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="serviços.php">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="contato.php">Contato</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container my-5">
        <h1 class="text-center mb-5">Entre em contato conosco</h1>
        <div class="row">
            <div class="col-md-6 mb-4">
                <h4 class="mb-4">Informações de contato</h4>
                <p><i class="fas fa-map-marker-alt mr-2"></i> Rua Pastor Hugo Gegembauer, 265 - Parque Ortolândia</p>
                <p><i class="fas fa-phone mr-2"></i> (19) 3854-5854</p>
                <p><i class="fas fa-envelope mr-2"></i> contato@jvinfo.com.br</p>
            </div>
            <div class="col-md-6">
                <h4 class="mb-4">Formulário de contato</h4>
                <form>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="mensagem">Mensagem</label>
                        <textarea class="form-control" id="mensagem" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>

