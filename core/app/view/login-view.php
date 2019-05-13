<?php if (!isset($_SESSION["client_id"])): ?>

<script type="text/javascript">
	

	$("title").html("Login - Avencintel");

	
  $("#login_nav").attr("class","nav-item active");

</script>
<link rel="stylesheet" type="text/css" href="core/css/login.css">
<br>

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
	          <a href="./?view=login">Ingresar</a>
	          <a href="./?view=register">Afiliarse</a>
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
<center>
	<section id='login'>
			
		<img src="static/logo4.png">
			<h3>Avecintel</h3>
			<br>
			<form method="post" action="./?action=session">
			<input type="text" name="user" placeholder="Usuario" class="form-control"><br>
			<input type="password" name="clave" placeholder="Contraseña" class="form-control"><br>
			<button type="submit" class="btn btn-primary">Entrar</button>
			</form>
	</section>
</center>

<br>
<br>
<br>
<?php else:
	header("Location: ./?view=index");
endif
 ?>