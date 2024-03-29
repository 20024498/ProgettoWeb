<!DOCTYPE html>

<!-- COPIA DA QUI -->

<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="descritpion" content="Questa pagina serve per iscriversi alla nostra newsletter">
    <meta name="author" content="Alcamo Stefano & Gili Andrea">
    <meta name="keywords" content="Blog, Traveling, Journey">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link href="Style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin="" />


    <title>Registrati</title>
</head>

<body>

    <header>

        <nav class="navbar">
            <a class="home" href="Home.html">HOME</a>
            <a class="chisiamo" href="ChiSiamo.html">CHI SIAMO</a>
            <a class="blog " href="Blog.html">BLOG</a>
            <a class="eventi" href="Eventi.php">EVENTI</a>
            <a class="galleria" href="Galleria.html">GALLERIA</a>
            <a class="registrati active" href="Registrati.php">REGISTRATI</a>

        </nav>

        <div class="spacing">

        </div>

    </header>


    <form action="Autenticazione.php" method="post" onsubmit="checkAccount()">

        <section class="sezioneRegistrati">



            <div class="formRegistrati">

                <div class="titoloRegistrati">

                    <h1> Iscriviti alla nostra Newsletter! </h1>

                </div>


                <div class="wrapCredenzialiRegistrati">

                    <input class="credenziale" id="Nome" type="text" placeholder=" Nome*" name="nome" pattern="[a-zA-Zéèòàùì\s]{1,50}" required>
                    <input class="credenziale" id="Cognome" type="text" placeholder=" Cognome*" name="cognome" pattern="[a-zA-Zéèòàùì\s]{1,50}" required>
                    <input class="credenziale" id="Email" type="email" placeholder=" Indirizzo Email*" name="mail" pattern="[A-z0-9\.\+_-]+@[A-z0-9\._-]+\.[A-z]{2,6}" oninput="checkEmail()" required>

                </div>

                <div class="bottoneRegistrati">

                    <input class="testoBottone" type="submit" value="ISCRIVITI" >

                    <p id="validation"><br></p>
                    
                    <p class= "underButtonText">I campi con * sono obbligatori.</p>

                </div>
                
                

            </div>

        </section>

    </form>





    <script>
        


        function checkEmail(){
        
            if (document.getElementById("Email").checkValidity()) {
                document.getElementById("Email").style.backgroundColor = "green";
                document.getElementById("validation").innerHTML = '<br>';
                } 
                
            else if(document.getElementById("Email").value== ""){
            
            	document.getElementById("validation").innerHTML = '<br>';
                document.getElementById("Email").style.backgroundColor = "";
            }
            
            else 
            {
                document.getElementById("validation").innerHTML = "Indirizzo non corretto";
                document.getElementById("Email").style.backgroundColor = "red";
                }
        }   
    </script>




    <footer class="wrapFooter">

        <div class="footer">


            <div class="wrapListe">

                <p>
                    Andrea Gili:
                </p>

                <ul>
                    <li>Numero: 20024498</li>
                    <li>Mail: 20024498@studenti.uniupo.it</li>
                </ul>

                <p>
                    Stefano Alcamo:
                </p>

                <ul>
                    <li>Numero: 20025536</li>
                    <li>Mail: 20025536@studenti.uniupo.it</li>
                </ul>

            </div>


            <div class="wrapSocial">


                <p>
                    I nostri social:
                </p>

                <a class="fa fa-facebook fa-2x" href="https://it-it.facebook.com/"></a>
                <a class="fa fa-instagram fa-2x" href="https://www.instagram.com/"></a>
                <a class="fa fa-twitter fa-2x" href="https://twitter.com/twitter"></a>
                <a class="fa fa-youtube fa-2x" href="https://www.youtube.com/?gl=IT&hl=it"></a>

            </div>


        </div>

    </footer>



</body></html>
