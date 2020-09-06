<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Fonte do google pra entrar no codigo -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
    <!-- Menu superior do site com logo -->

    <section class="container first-section">
        <img class=img1 src="logo1.png" alt="Gato">
        <button class="tablink" onclick="openPage('Home', this, 'white')">Nosso site</button>
        <button class="tablink" onclick="openPage('Ranking', this, 'white')" id="defaultOpen">Ranking de Produtos</button>
        <button class="tablink" onclick="openPage('Cadastro', this, 'white')">Cadastro do Seu Pet</button>
        <button class="tablink" onclick="openPage('Adote', this, 'white')">Adote!</button>
        <button class="tablink" onclick="openPage('Adote', this, 'white')">Login</button>
    </section>


    <!-- Setor direciona ranking -->

    <div id="home" class="tabcontent">
        <img class=img src="imagem1.png" alt="Gato">
        <h3>RANKING</h3>
        <p>De produtos que fazem a felicidade do seu pet!</p>
        <p>Aqui você encontra uma avaliação justa feita por outros usuários dos produtos para o seu melhor amigo.</p>
        <button class="tablinkb" onclick="openPage('Ranking', this, 'white')">Visite nosso Ranking</button>
    </div>

    <!-- Menu de produtos de acordo com animal -->
    <div class="meio">
        <p>Encontre o que você precisa de acordo com o seu Pet</p>
        <img class="itensa" src="tipopet.png">
        <img class="itensa" src="tiporação.png" alt="botaoraçao">
        <img class="itensa" src="brinquedo.png" alt="botaobrinquedo">
        <img class="itensa" src="tipoace.png" alt="botaoace">
        <img class="itensa" src="tiporemedio.png" alt="botaoremedio">
        <button class="tablinkb">O que você procura?</button>
        <br>

        <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan active-cyan-2 mt-2">
            <i class="fas fa-search" aria-hidden="true"></i>
            <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search">
        </form>
    </div>

    <section>
        <div class="container-fluid text-center text-md">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">

                    <h5 class="text-uppercase font-weight-bold">A Tudo Pet!</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Sobre nós</a>
                        </li>
                        <li>
                            <a href="#!">Trabalhe com a Gente</a>
                        </li>
                        <li>
                            <a href="#!">Anuncie com a gente</a>
                        </li>
                    </ul>
                </div>

                <hr class="clearfix w-100 d-md-none pb-3">
                <div class="col-md-6 mb-md-0 mb-3">
                    <h5 class="text-uppercase font-weight-bold">Clientes</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Politica de Privacidade</a>
                        </li>
                        <li>
                            <a href="#!">Termos de uso</a>
                        </li>
                        <li>
                            <a href="#!">Precisa de ajuda?</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>