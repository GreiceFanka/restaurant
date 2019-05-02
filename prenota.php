<?php require_once("insert.php");?>
<?php 
    if(isset($_POST['enviar'])){
            $mensage = "Prenotazione inviata con successo.";
        }
?>
<!DOCTYPE html PUBLIC>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="_boot/bootstrap.min.css" rel="stylesheet">
    <link href="_css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <title>Ristorante Mangia Mangia</title>
    
</head>
    <body>
    <header>
         <nav class="navbar navbar-inverse navbar-fixed-top">
                <section class="container">
                    <div class="navbar-header">
                            <button type="button"
                                    class="navbar-toggle collapsed"
                                    data-toggle="collapse"
                                    data-target="#movelmenu"
                                    aria-expanded="false">

                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>                      
                        </div>
                            <div class="collapse navbar-collapse pull-right" id="movelmenu"> 
                                <ul class="nav navbar-nav">
                                    <li><a href="index.html">HOME</a></li>
                                    <li><a href="index.html">MENU</a></li>
                                    <li><a href="#prenotazioni">PRENOTAZIONI</a></li>
                                    <li><a href="#contatto">CONTATTO</a></li>
                                </ul>
                            </div>
                    </section>
                 </nav>
        </header>
        
        <div id="prenotazioni">
           <div class="container">
               <div class="row">
                    <main>
                        <div id="formulario">
                            <form action="prenota.php" method="post">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome" size="30" maxlength="100" required placeholder="Inserisci il tuo nome">

                                <label for="telefone">Telefono</label>
                                <input type="tel" name="telefone" id="telefone" size="30" maxlength="30" required placeholder="Inserisci il tuo telefono"> 

                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" size="30" maxlength="60" required placeholder="Inserisci il tuo email">      

                                <label for="prenotazioni">Data prenotazioni</label>
                                <input type="date" name="date" id="date" size="30">

                                <label for="number">Numero di persone</label>
                                <input type="number" name="persone" id="persone" min="1" max="10" value="1">

                                <input type="submit" value="Inviare" id="enviar" name="enviar">
                                
                                 <?php
                                        if( isset($mensage) ) {
                                        echo "<p>" . $mensage . "</p>";}
                                    ?>

                            </form>
                        </div>
                    </main>
                </div>
            </div>
        </div>
           
    <script src="_script/jquery.js"></script>
    <script src="_boot/bootstrap.min.js"></script>
    <script src="_script/script.js"></script>
        

</body>
<footer>
    <div id="contatto">
        <div class="container">
            <div class="row">
                <h4>Contatto</h4>
                <h5>Email: thi.zandona@gmail.com<br>
                   Telefone:+48 507350513</h5>
                    <a href="https://www.instagram.com/zandona.thiago/" target="_blank">
                        <img src="_img/foto06.png">
                    </a>
            </div>
        </div>
    </div>
</footer>
</html>