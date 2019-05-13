<script type="text/javascript">
	

	$("title").html("Asociados - Cotelco");

</script>

<?php 

	include 'core/app/navbar.php';

 ?>

    <hr style="width:100%;">
		<br>
		<h2>LISTADO DE HOTELES</h2>
		<br>
    <hr style="width:100%;">

    <div class="searchlist">
    	<input type="text" name="hotel" placeholder="Hotel..." />
    	<input type="text" name="location" placeholder="Estado o Ciudad" />
        <button><i class="fas fa-search"></i></button>
    </div>
		
			<?php 
				$sql = new Hoteles();
				$query = $sql->selectNotice();
				
				$mostrar = '<div class="rowhotel">';
				foreach ($query as $data) {
				if ($data->estatus != 0) {
					$mostrar .= '<div class="hotel">';
					$mostrar .= '<img src="'.$data->logo.'">';
					$mostrar .= '<h5> '. $data->nombre_e .' </h5>';
					$mostrar .= '<i class="fas fa-map-marker-alt"></i><p> '.$data->direccion.'</p>';
					$mostrar .= '<i class="fas fa-phone"></i><p>  '.$data->telefono_assis.'</p>';
					$mostrar .= '<i class="fas fa-envelope"></i><p> '.$data->email.'</p>';
					$mostrar .= '<i class="fas fa-globe-americas"></i><p><a href="'.$data->pag_web.'">   '.$data->pag_web.'</a></p>';
					$mostrar.= '</div>';
				}
				}
					$mostrar .= '</div>';
					$mostrar .= '<hr style="width:100%;"><br><br>';
				echo $mostrar;

		 	?>
