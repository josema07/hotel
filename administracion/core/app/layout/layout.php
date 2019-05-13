<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<link rel="stylesheet" type="text/css" href="../../css/admin.css">
	<link rel="stylesheet" type="text/css" href="../../../../core/css/estiloavecintels.css">
	<title></title>
</head>
<body>

	<div class="main-container">
		<div class="content">
			<ul>
				<li><img src="../../../../static/logo4.png"></li>
				<li><a href="">Inicio</a></li>
				<li><a href="">Asociados</a></li>
				<li><a href="">Noticias</a></li>
				<li><a href="">servicios</a></li>
			</ul>
		</div>
	</div>
	<br><br>	
	<div class="container-edit">
		<div class="edit">
	 		<div>
  <h2>Seccion del Slider</h2>
  <div>
    <select>
      <?php 
        $query = new Hoteles();
        $querys = $query->selectHotel();
        foreach ($querys as $data): ?>
      <option value="<?php echo $data->id; ?>"><?php echo $data->nombre_e; ?></option>
    <?php endforeach; ?>
    </select>
  </div>
</div>
		</div>
	</div>

</body>
</html>