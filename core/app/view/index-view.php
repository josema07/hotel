<script src="core/js/cosasbootstrap.js"></script>
<script src="core/js/avecintel.js"></script>
<script src="core/js/script.js"></script>

<link rel="stylesheet" href="core/css/estiloavecintels.css">
<script type="text/javascript">
	

	$("title").html("Inicio - Cotelco");


  $("#home_nav").attr("class","nav-item active");

</script>

   <div class="navegador-menu fixed-top" style="background-color:#15131399;">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <navegador class="navegadorbar navegadorbar-dark navegadorbar-expand-lg">
                  <a class="navegadorbar-brand" href="./?view=index"><img src="static/images/logo.png" class="img-fluid" alt="logo" width="100px"></a> 
                  <button class="navegadorbar-toggler" type="button" data-toggle="collapse" data-target="#navegadorbar" aria-controls="navegadorbar" aria-expanded="false" aria-label="Toggle navegadorigation" style="background-color: #093999;"> 
                     <span class="navegadorbar-toggler-icon"></span> 
                  </button>
                  <div class="collapse navegadorbar-collapse" id="navegadorbar">
                     <ul class="navegadorbar-navegador ml-auto">
                        <li class="navegador-item"> <a class="navegador-link active" href="./?view=index">INICIO<span class="sr-only">(current)</span></a> </li>

                        <li class="navegador-item"> <a class="navegador-link" href="./?view=associates">ASOCIADOS</a> </li>
                        <li class="navegador-item"> <a class="navegador-link" href="./?view=service">SERVICIOS</a> </li>
                        <li class="navegador-item"> <a class="navegador-link" href="./?view=notice">NOTICIAS</a> </li>
                        <li class="navegador-item">
                        <?php 
                           if (isset($_SESSION["client_id"])) {
                              if($_SESSION['rol'] == "admin"){

                                 echo 
                                 '<div class="dropdown">
                                    <button class="dropbtn">'. $_SESSION['client_id'] .'</button>
                                    <div class="dropdown-content">
                                      <a href="./?view=admin">Administrador</a>
                                      <a href="./?action=session_destroy">Cerrar Sesion</a>
                                   </div>
                                  </div>';
                                 
                              }else{
                                 if(isset($_SESSION["client_id"])) {
                                  echo 
                                 '<div class="dropdown">
                                    <button class="dropbtn">'. $_SESSION['client_id'] .'</button>
                                    <div class="dropdown-content">
                                      <a href="./?action=session_destroy">Cerrar Sesion</a>
                                   </div>
                                  </div>';
                                 } 
                              }          
                           }else{
                              echo 
                              '<li class="navegador-item"> <a class="navegador-link" href="./?view=login"><i class="fas fa-user"></i>  INGRESAR</a> </li>
                              <li class="navegador-item"> <a class="navegador-link" href="./?view=register">  AFILIARSE</a> </li>';
                           } 
                        ?>
                        </li>  
                             
                        <li class="navegador-item">
                              <a href="#"><img src="static/images/spain.png" width="25px"></a>
                              <a href="#"><img src="static/images/usa.png" width="25px"></a>
                        </li>
                      </ul>
                  </div>
               </navegador>
            </div>
         </div>
      </div>
   </div>

 <div class="home" id="home">
          <div class="slider1">
            <?php 

                $query = new Slider();
                $querys = $query->getImgSlider();
                $mostrar = "<div class='container1'>";
                foreach ($querys as $data) {
                    $mostrar .= '<img src="'. $data->url .'" alt="">';
                } 
                $mostrar .= "</div>;";
                echo $mostrar;

             ?>

            <div class="controls1" id="secmarcas1">
              <ul></ul>
            </div>

        </div>
    </div> 
    <br><br>   
    <hr style="width:100%;">


    <!-- SECCION DE MARCAS -->
    <div class="secmarcas">
        <br>
        <h2> Marcas </h2>
    </div>

    <hr style="width:100%;">
    <br>
    <div class="marcas">

        <div class="marca"> 
            <img src="static/logo/marriot.jpg" alt="marriot" width="100px">

        </div>

        <div class="marca">

            <img src="static/logo/pestana.png" alt="pestana" width="100px">

        </div>

        <div class="marca">

            <img src="static/logo/eurobuilding.png" alt="euro" width="100px">
        </div>

        <div class="marca">
             
            <img src="static/logo/cayena.png" alt="cayena" width="100px">
        </div>

        <div class="marca">

            <img src="static/logo/tamanaco.jpeg" alt="tamanaco" width="100px">
        </div>

        <div class="marca">

            <img src="static/logo/renaiss.png" alt="renaiss" width="100px">
        </div>
        <div class="marca">
             
            <img src="static/logo/altamira.png" alt="altamira" width="100px">
        </div>
        <div class="marca">
             
            <img src="static/logo/cct.jpg" alt="cct" width="100px">
        </div>

    </div>
    <br>
    <hr style="width:100%;">



    <!-- SECCION DE BUSQUEDA / RESERVAS -->

   <div class="seccionbr"> 
           
             <div class="busqueda">
                <div class="cuadro">
                    <label for="fname" class="fname"><b><h3>BUSCAR HOTELES</h3></b></label>
                    <br>    <br>
                    <div class="select">
                          <select onchange="mostrarEstado(this.value)" name="slct" id="slct">
                            <option selected disabled>Estado</option>
                            <?php  
                            $query = new ListaEstado();
                            $querys = $query->getListaEstados();

                            foreach($querys as $data): ?>
                              <option value="<?php echo $data->estado; ?>"><?php echo $data->estado; ?></option>
                            <?php endforeach; ?>
                          </select>
                    </div>
                    <br>
                     <div class="select">
                          <select name="slct" id="slct">
                            <option selected disabled>Ciudad</option>
                            <option value="1">Caracas</option>
                            <option value="2">Guatire</option>
                            <option value="3">Guarenas</option>
                          </select>
                    </div>
                    <br>

                </div>
            </div>

            <div class="lista" id="lista">

            </div>

            <br>
   </div>
<br>

    <hr style="width:100%;">

    <!--QUIENES SOMOS -->

    <div class="about" id="about">
            <br>
        <h2> Quienes Somos </h2>
            <br>
    </div>


    <hr style="width:100%;">

    <div class="aboutsecc">
        <div class="mision">
            <h4>Mision</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco labori</p>
            
        </div>        
        <div class="mision">

            <h4>Vision</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut</p>
            
        </div>
        <div class="mision">

            <h4>Objetivo</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco </p>
            
        </div>
    </div>

    <br>
    <hr style="width:100%;">