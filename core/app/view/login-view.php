<?php if (!isset($_SESSION["client_id"])): ?>

<script type="text/javascript">
	

	$("title").html("Login - Avencintel");

	
  $("#login_nav").attr("class","nav-item active");

</script>
<link rel="stylesheet" type="text/css" href="core/css/login.css">
<br>

<?php 

	include 'core/app/navbar.php';

 ?>

	  	    	<br><br>   
    		<hr style="width:100%;">
<center>
	<section>
			<div id="login">
				<img src="static/logo4.png">
				<h3>Avecintel</h3>
				<br>
				<form method="post" action="./?action=session">
					<input type="text" name="user" placeholder="Usuario" class="form-control"><br>
					<input type="password" name="clave" placeholder="Contraseña" class="form-control">
					<a href="./?view=register">Aun no estas registrado?</a><br><br>
					<button type="submit" class="dropbtn">Entrar</button>
				</form>
			</div>
	</section>
</center>

<br>
<br>
<br>
<?php else:
	header("Location: ./?view=index");
endif
 ?>