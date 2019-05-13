<?php if (isset($_SESSION["rol"]) == "admin"): ?>

<?php 

	include 'core/app/admin-navbar.php';

 ?>

<!-- ====================SECCION PARA INSERTAR IMAGENES AL SLIDER==================== -->
	<div class="container-edit">
		<div class="edit">
		 	<section>
		 		<div>
				  <h2>Seccion del Slider</h2>
				  <div>
				  	<form class="" method="post" action="./?action=load_img" enctype="multipart/form-data">
			   	 	<select name="idHotel" class="form-control">
					    	<option selected disabled requiere>--Seleccionar Hotel--</option>
					      <?php 
					        $query = new Hoteles();
					        $querys = $query->selectHotel();
					        foreach ($querys as $data): ?>
					      	<option value="<?php echo $data->id; ?>"><?php echo $data->nombre_e; ?></option>
					   	 <?php endforeach; ?>
				    	</select>	
				    	<br>
				    	<div class="center-elements">
					    	<label class="dropbtn" for="imagen">Subir Imagen</label>
				    		<input type="file" style="display: none;" id="imagen" name="imagen" size="20">
					   	<input class="dropbtn" type="submit" value="Enviar imagen">
					 	</div>
				    </form>
				  </div>
				</div>
			</section>
	    	<br><br>   
    		<hr style="width:100%;">
<!-- =================================== END SECCION SLIDER======================================= -->

<!-- ================================ SECCION USERS EDIT ========================================== -->

    		<!--================================ SECCION DE NOTICIAS ===============================================-->
		</div>
	</div>
<?php else: 
			header('Location: ./?view=index');
		endif
	?>