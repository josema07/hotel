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

<?php 

	include 'core/app/navbar.php';

 ?>

<section class="color-subnav">
        <hr style="width:100%;">
		<br>
		<h2>NOTICIAS</h2>
		<br>
    <hr style="width:100%;">

    <?php 

    	$sql = new Notice();
    	$querys = $sql->getInfoNotice();
    	$mostrar = '<div class="colnoticia">';
    	foreach ($querys as $data) {
    		if ($data->estatus != 0) {
    		$mostrar .= '<div class="noticia">';
	    		$mostrar .= '<img src="'.$data->imagen.'">';
	    		$mostrar .= '<div>';
		    		$mostrar .= '<h5>'.$data->titulo.'</h5>';
		    		$mostrar .= '<hr style="width:100%;">';
		    		$mostrar .= '<p>'.$data->contenido.'</p>';
	    		$mostrar .= '</div>';
    		$mostrar .= '</div>';
    		$mostrar .= '<br><hr style="width:100%;"><br>';
    		}
    	}
    	$mostrar .= '</div>';
    	echo $mostrar;

  	?>

   <!--  <div class="colnoticia">
    	<div class="noticia">
			 <img src="static/logo/pestana.png">
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
			 <img src="static/logo/renaiss.png">

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
			 <img src="static/logo/eurobuilding.png">
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
			 <img src="static/logo/pestana.png">
			 <div>
			 <h5>Noticias de eventos en Pestana</h5>
			 </div>
		</div>

    </div>
    <hr style="width:100%;">
    <br>
    <br> -->
</section>