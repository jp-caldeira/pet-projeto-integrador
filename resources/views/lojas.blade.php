
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossos Parceiros</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sobre.css">

</head>


<body>
    <header>
        @include('header')
    </header>



    <div class="parceiros">
        
    <h2>Nossos Principais Parceiros</h2>

    <a href="https://www.petlove.com.br/">
    <img class="parceirosimg" src="storage/img/petlove.jpg" alt="Parceiros"></a>
    <a href="https://www.cobasi.com.br">
        <img class="parceirosimg" src="storage/img/cobasi.jpg" alt="Parceiros"></a>
        <a href="https://www.petz.com.br">
        <img class="parceirosimg" src="storage/img/petz.jpg" alt="Parceiros"></a>
        <a href="https://www.royalpets.com.br">
        <img class="parceirosimg" src="storage/img/royalpets.jpg" alt="Parceiros"></a><br>
        <a href="https://www.catclub.com.br">
        <img class="parceirosimg" src="storage/img/catclub.jpg" alt="Parceiros"></a>
        
        <a href="https://www.zeedog.com.br/">
        <img class="parceirosimg" src="storage/img/zeedog.jpg" alt="Parceiros"></a>
        <a href="https://www.zenpet.com.br">
        <img class="parceirosimg" src="storage/img/zenpet.jpg" alt="Parceiros"></a>
        <a href="https://lojagatamia.com.br/">
        <img class="parceirosimg" src="storage/img/gatamia.jpg" alt="Parceiros"></a>
       
    </div>

        <div class="parceirostexto">
            <p>Já imaginou poder divulgar seus produtos para clientes de todo o Brasil? <br>
                    Ter um posicionamentos positivos que passam 
                    confiança para os seus clientes e influenciar novos clientes?<br>
            Aqui na Mundo Pet você consegue alcançar mais pessoas!</p>
        </div>

        <form class="parceiroemail">
            <div class="form-group">
                <label for="exampleInputEmail1">Envie seu E-mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">Enviaremos um formulário de cadastro! </small>
                </div>
            <button type="submit" class="botao">Quero participar</button>
        </form>



        <section class= "base">
            @include('footer')
        </section>

    </body>
</html>