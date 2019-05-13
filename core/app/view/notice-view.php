 <script type="text/javascript">
	

	$("title").html("Noticias - Cotelco");

</script>

<style type="text/css">
	/*.orden{
		background-color: grey;
	}*/
	.width-img{
		display: inline-block;
		width: 30%;
		margin: 0.5em;
		border: none;
	}
	img{
		filter: grayscale(0);
		transition: .3s ease-in-out; 
	}
	img:hover{
		filter: grayscale(100%);
	}
</style>

<section>
	    <div class="container">
	      <div class="navbarDesk">
	        <div class="img">
	          <img src="static/images/logo.png" alt="">
	        </div>
	        <div class="option">

	          <a href="./?view=index">Inicio</a>
	          <a href="./?view=associates">Asociados</a>
	          <a href="./?view=service">Servicios</a>
	          <a href="./?view=notice">Noticias</a>
	          <a href="">Ranking</a>
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
											  <div class="dropdown-content">./?
												  <a href="./?action=session_destroy">Cerrar Sesion</a>
											 </div>
											</div>';
                                 } 
                              }          
                           }else{
                              echo 
                              '<a href="./?view=login">Ingresar</a>
	          						<a href="register-view.php">Afiliarse</a>';
                           } 
                        ?>
	          
	          <div class="dropdown">
				  <button class="dropbtn">Idioma</button>
				  <div class="dropdown-content">
				  <a href="#"><img src="static/images/spain.png" width="15px"> Español</a>
				  <a href="#"><img src="static/images/usa.png" width="15px"> Ingles</a>
				 </div>
				</div>
	        </div>
	      </div>
	    </div>
	  </section>

<section class="color-subnav">
        <hr style="width:100%;">
		<br>
		<h2>NOTICIAS</h2>
		<br>
    <hr style="width:100%;">

    <div class="colnoticia">
    	<div class="noticia">
			 <img src="static/images/pestana.png">
			 <div>
			 <h5>Noticias de eventos en Pestana</h5>
			 <hr style="width:100%;">
			 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
			 </div>
		</div>

    <hr style="width:100%;">
	
		<div class="noticia">
			<div>
			 <img src="static/images/renaiss.png">

			 </div>
			 <div>
			 <h5>Noticias de eventos en Pestana</h5>
			<hr style="width:100%;">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
			 </div>
		</div>

	<hr style="width:100%;">

		<div class="noticia">
			 <img src="static/images/eurobuilding.png">
			 <div>
			 <h5>Noticias de eventos en Pestana</h5>
			 	<hr style="width:100%;">
			 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>

			    <hr style="width:100%;">
			 </div>

		</div>

	<hr style="width:100%;">

		<div class="noticia">
			 <img src="static/images/pestana.png">
			 <div>
			 <h5>Noticias de eventos en Pestana</h5>
			 </div>
		</div>

    </div>
    <hr style="width:100%;">
    <br>
    <br>
</section>