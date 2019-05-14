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
		    		$mostrar .= '<hr style="width:100%;">';
		    		$mostrar .= '<a href="#" class="dropbtn">Leer Mas</a>';
	    		$mostrar .= '</div>';
    		$mostrar .= '</div>';
    		$mostrar .= '<br><hr style="width:100%;"><br>';
    		}
    	}
    	$mostrar .= '</div>';
    	echo $mostrar;

  	?>
</section>