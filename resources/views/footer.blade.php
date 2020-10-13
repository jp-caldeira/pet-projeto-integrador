
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Fonte do google pra entrar no codigo -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/footer.css">

    <!-- Styles -->
    {{-- <style>
            .barrafinal {     
                    float: left;
                    padding: 10px 10px 10px 10px;
                    font-size: 15px;
                    border-radius: 5px;
                    width: 90%;
                    font-family: 'Quicksand', sans-serif;
                    text-decoration:none;
                    background-color: rgb(3, 152, 158);
                    height:40px;
                    position: absolute;
                    
                    margin-top:10px;
                    margin-left: 20px;
                    margin-right:20px;
                }
            a{
                padding-left: 80px;
                text-decoration:none;
            }
            .icons {
                
                    margin-bottom:10px;
                    margin-left:400px;
                    float:center;
                    bottom: 0; 


            }

        </style> --}}
              
</head>

<body>
        <div class="icons">
            <img src="/img/facebook.jpg"  style="width:40px; margin-left:40px" alt="facebook">
            <img src="/img/email.jpg"  style="width:40px; margin-left:50px" alt="email">
            <img src="/img/instagram.jpg"  style="width:40px; margin-left:60px" alt="instagram">
            <img src="/img/twitter.jpg"  style="width:40px; margin-left:70px" alt="twitter">


        </div>

       <section>     
        <div class="barrafinal">
       
            <a href="{{ route('sobre') }}" style="color:white">Sobre Nós</a>
            <a href="{{ route('trabalhe') }}" style="color:white">Trabalhe Conosco</a>
            <a href="{{ route('cadastropet') }}"style="color:white">Dúvidas Frequentes</button></a>
            <a href="{{ route('cadastropet') }}"style="color:white">Lojas Parceiras</button></a>
            <a href="{{ route('login') }}"style="color:white">Política de privacidade</button></a>
        </div>
        
        </section> 
        
    
</body>