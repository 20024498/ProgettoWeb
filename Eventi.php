<!DOCTYPE html>

<!-- COPIA DA QUI -->

<html lang="it">

<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js" integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==" crossorigin=""></script>

    <meta charset="utf-8">
    <meta name="description" content="Questa pagina eventi serve a mostrare le prossime vacanze che la nostra compagnia sta orgaizzando">
    <meta name="author" content="Alcamo Stefano & Gili Andrea">
    <meta name="keywords" content="Blog, Traveling, Journey">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link href="Style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin="" />


    <title>Eventi</title>
</head>

<body>



    <header>

        <nav class="navbar">
            <a class="home" href="Home.html">HOME</a>
            <a class="chisiamo" href="ChiSiamo.html">CHI SIAMO</a>
            <a class="blog " href="Blog.html">BLOG</a>
            <a class="eventi active" href="Eventi.php">EVENTI</a>
            <a class="galleria" href="Galleria.html">GALLERIA</a>
            <a class="registrati" href="Registrati.php">REGISTRATI</a>

        </nav>

        <div class="spacing">

        </div>

    </header>


    <div class="copertinaEventi">

        <h1>Voglia di nuove avventure?<br> Non sei il solo.</h1>


    </div>


    <div class="intermezzoEventi">

        <h2> Scopri qui le nostre ultime iniziative. <br> Troverai sicuramente quella che fa al caso tuo!</h2>

    </div>


    <section class="sectionVacanzeEventi">

        <div class="selettoreEventi">




            <a class="wrapFotoEventi wrapFotoEventi1" href="#Pag">

                <div class="foto1SelettoreEventi fotoSelettoreEventi">

                    <h2>Estate 2019 - Pag</h2>

                </div>

            </a>



            <a class="wrapFotoEventi wrapFotoEventi2" href="#Gallipoli">

                <div class=" foto2SelettoreEventi fotoSelettoreEventi">

                    <h2>Estate 2019 - Gallipoli</h2>

                </div>


            </a>


        </div>

        <a class="vacanzaEventi vacanzaEventi1" name="Pag">

            <div class="titoloEventi titoloEventi1">
                <h2>PAG - CROAZIA</h2>
            </div>


            <div class="mappaEventi mappaEventi1" id="mappa">

            </div>





            <div class="descrizioneEventi descrizioneEventi1">



                <div class="wrapInfoGeneraliEventi">



                    <!--   <?php 
                        $servername = "localhost";
                        $username = "pweb1819gilia";
                        $password = "GmDMs7hFnPFN";
                        $dbname = "my_pweb1819gilia";

                        $conn = mysqli_connect($servername, $username, $password, $dbname);

                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
						}
                    
                            $sql = "SELECT Data, Partenza, Costo, Notti, Trasporto FROM GeneraliViaggio WHERE Destinazione = 'Pag'";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result)>0) {
                            while($row = mysqli_fetch_assoc($result)) {
								
                                echo '<div class="dataEventi">'. '<p>'. "DATA: " . $row["Data"] . '</p>'.'</div>';
                                echo '<div class="partenzaEventi">'.'<p>'."PARTENZA: " . $row["Partenza"] .'</p>'.'</div>';
                                echo '<div class="costoEventi">'.'<p>'."COSTO: " . $row["Costo"] .'€' .'</p>'.'</div>';
                                echo '<div class="nottiEventi">'.'<p>'."NOTTI: " . $row["Notti"] .'</p>'.'</div>';
                                echo '<div class="trasportoEventi">'.'<p>'."TRASPORTO: " . $row["Trasporto"] .'</p>'.'</div>';
                                
                        }
                        
                    } 
                    else {
                        echo "0 results";
                    }

                    mysqli_close($conn); 

                    ?> -->


                </div>

                <div class="wrapInfoAttivitàEventi">

                    <div class="wrapFrecciaSinistra" onclick="plusSlides(-1)">
                        <p>&#10094;</p>
                    </div>

                    <div class="infoAttivitàEventi">
                        <p class="a">Lorem ipsum dolor sit amet1 </p>
                        <p class="a">Lorem ipsum dolor sit amet2 </p>
                        <p class="a">Lorem ipsum dolor sit amet3 </p>
                        <p class="a">Lorem ipsum dolor sit amet4 </p>
                        <p class="a">Lorem ipsum dolor sit amet5 </p>
                        <p class="a">Lorem ipsum dolor sit amet6 </p>
                        <p class="a">Lorem ipsum dolor sit amet7 </p>
                        <p class="a">Lorem ipsum dolor sit amet8 </p>
                    </div>

                    <div class="wrapFrecciaDestra" onclick="plusSlides(1)">
                        <p>&#10095;</p>
                    </div>

                </div>

            </div>

            <div class="spacing spacing1">

            </div>

        </a>


        <a class="vacanzaEventi vacanzaEventi2" name="Gallipoli">

            <div class="titoloEventi titoloEventi2">

                <h2>GALLIPOLI - PUGLIA</h2>

            </div>

            <div class="mappaEventi mappaEventi2" id="mappa2">


            </div>

            <div class="descrizioneEventi descrizioneEventi2">



                <div class="wrapInfoGeneraliEventi">

                    <!-- <?php 
                        $servername = "localhost";
                        $username = "pweb1819gilia";
                        $password = "GmDMs7hFnPFN";
                        $dbname = "my_pweb1819gilia";

                        $conn = mysqli_connect($servername, $username, $password, $dbname);

                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                       
 
                    
                    $sql = "SELECT Data, Partenza, Costo, Notti, Trasporto FROM GeneraliViaggio WHERE Destinazione = 'Gallipoli'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
								
                                echo '<div class="dataEventi">'. '<p>'. "DATA: " . $row["Data"] . '</p>'.'</div>';
                                echo '<div class="partenzaEventi">'.'<p>'."PARTENZA: " . $row["Partenza"] .'</p>'.'</div>';
                                echo '<div class="costoEventi">'.'<p>'."COSTO: " . $row["Costo"] .'€' .'</p>'.'</div>';
                                echo '<div class="nottiEventi">'.'<p>'."NOTTI: " . $row["Notti"] .'</p>'.'</div>';
                                echo '<div class="trasportoEventi">'.'<p>'."TRASPORTO: " . $row["Trasporto"] .'</p>'.'</div>';
                                
                        }
                        
                    } 
                    else {
                        echo "0 results";
                    }

                    mysqli_close($conn); 

                    ?> -->


                </div>

                <div class="wrapInfoAttivitàEventi">

                    <div class="wrapFrecciaSinistra" onclick="plusSlidesb(-1)">
                            <p>&#10094;</p>
                        </div>
    
                        <div class="infoAttivitàEventi">
                            <p class="b">Lorem ipsum dolor sit amet1 </p>
                            <p class="b">Lorem ipsum dolor sit amet2 </p>
                            <p class="b">Lorem ipsum dolor sit amet3 </p>
                            <p class="b">Lorem ipsum dolor sit amet4 </p>
                            <p class="b">Lorem ipsum dolor sit amet5 </p>
                            <p class="b">Lorem ipsum dolor sit amet6 </p>
                            <p class="b">Lorem ipsum dolor sit amet7 </p>
                            <p class="b">Lorem ipsum dolor sit amet8 </p>
                        </div>
        
                        <div class="wrapFrecciaDestra" onclick="plusSlidesb(1)">
                            <p>&#10095;</p>
                        </div>
                </div>

            </div>

            <div class="spacing spacing2">

            </div>

        </a>

    </section>


    <script>
        var mymap = L.map('mappa').setView([44.483333, 14.95], 11);
        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Mapdata &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' + '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' + 'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox.streets'
        }).addTo(mymap);

        L.marker([44.542538, 14.916819]).addTo(mymap).bindPopup("prova");
        L.marker([44.538395, 14.916231]).addTo(mymap).bindPopup("prova");
        L.marker([44.570397, 14.888083]).addTo(mymap).bindPopup("prova");
        L.marker([44.553505, 14.884991]).addTo(mymap).bindPopup("prova");
        L.marker([44.53876, 14.91461]).addTo(mymap).bindPopup("prova");
        L.marker([44.441487, 15.045337]).addTo(mymap).bindPopup("prova");

    </script>










    <script>
        var mymap2 = L.map('mappa2').setView([40.055556, 17.991667], 12);
        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Mapdata &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' + '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' + 'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox.streets'
        }).addTo(mymap2);
        L.marker([40.0555, 17.9973]).addTo(mymap2).bindPopup("prova");
        L.marker([40.055497, 17.990414]).addTo(mymap2).bindPopup("prova");
        L.marker([40.051127, 17.996067]).addTo(mymap2).bindPopup("prova");
        L.marker([40.21667, 18.16667]).addTo(mymap2).bindPopup("prova");
        L.marker([40.095409, 18.02574]).addTo(mymap2).bindPopup("prova");
        L.marker([40.031375, 18.020344]).addTo(mymap2).bindPopup("prova");
        L.marker([40.005989, 18.019514]).addTo(mymap2).bindPopup("prova");
        L.marker([40.037455, 18.015562]).addTo(mymap2).bindPopup("prova");

    </script>


    <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("a");
    if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
    slides[slideIndex-1].style.display = "block";
    } 
    


    var slideIndexb = 1;
    showSlidesb(slideIndexb);

    function plusSlidesb(n) {
        showSlidesb(slideIndexb += n);
    }

    function currentSlideb(n) {
        showSlidesb(slideIndexb = n);
    }

    function showSlidesb(n) {
    var i;
    var slides = document.getElementsByClassName("b");
    if (n > slides.length) {slideIndexb = 1}
        if (n < 1) {slideIndexb = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
    slides[slideIndexb-1].style.display = "block";
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



</body>

</html>
