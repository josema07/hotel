
<!DOCTYPE html>
<html>
<head>
	<title>Avecintel</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- css -->
   <link rel="stylesheet" href="core/css/complemento.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="core/css/themify-icons.css">
    <!-- PRINCIPAL CSS -->
    <link rel="stylesheet" href="core/css/estiloavecintel.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100" rel="stylesheet">

</head>
<body onresize="modal()">
  
 <section>

    <?php

    if(isset($_GET['view'])){

      $load_url = new View();
      $load_url->url=$_GET['view'];
      $load_url->loadUrl();

    }else{
      $load_url = new View();
      $load_url->url="index";
      $load_url->loadUrl();


    }


    ?>

    </section>

<!-- SECCION DE FOOTER -->
    
<!-- // SECCION DE CONTACTO -->
    <footer class="seccontact" id="seccontacto">
        
        <div class="social">
            <h3 style="text-align: center; padding-bottom: 4%;">Información</h3>
                <div>
                    <i class="fas fa-map-marker-alt"></i>
                    <p><span>Hotel Alba Caracas. Torre Sur, PB</span> La Candelaria, Venezuela</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>(0212) 577.87.79</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:avecintel@gmail.com">avecintel@gmail.com</a></p>
                </div>
            
        </div>
        <div class="contactanos">

            <h3 style="text-align: center; padding-bottom: 4%;">Contactanos</h3>

                <form action="#" method="post">

                    <input type="text" name="email" placeholder="Email" />
                    <textarea name="message" placeholder="Mensaje"></textarea>
                    <button>Enviar</button>

                </form>
            
        </div>
        <div class="mapa">

            <h3 style="text-align: center; padding-bottom: 4%;">Mapa</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15692.04765766939!2d-66.9045369593874!3d10.49972650269427!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a592bba433e31%3A0x8a208bc5c1d56656!2sHotel+Venetur+Alba+Caracas!5e0!3m2!1ses!2sve!4v1555434727202!5m2!1ses!2sve" frameborder="0" style="border:0" allowfullscreen></iframe>

    </div>
    </footer>



    <br>
    <hr style="width:100%;">


    

     <!--jQuery and Bootstrap-->

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>  
    <script src="core/js/cosasbootstrap.js"></script>
    <script src="core/js/avecintel.js"></script>
    <script src="core/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@7.1.0/dist/promise.min.js"></script>

    <script src="core/js/main.js"></script>
    <script src="core/js/navbar.js"></script>
    <script src="core/js/modal.js"></script>


</body>
</html>