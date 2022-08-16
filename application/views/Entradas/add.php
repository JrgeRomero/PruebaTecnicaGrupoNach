<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<center><h3>Agrega una nueva entrada</h3> </center><br>
	<div class="container">
		<form class="row g-3">
			<?php echo form_open('entradas/add'); ?>
		  <div class="col-md-6">
		    <label for="titulo" class="form-label">Titulo</label>
		    <input type="text" class="form-control" name="titulo" value="<?php echo $this->input->post('titulo'); ?>">
		  </div>
		  <div class="col-md-6">
		    <label for="autor" class="form-label">Autor</label>
		    <input type="text" class="form-control" name="autor" value="<?php echo $this->input->post('autor'); ?>">
		  </div>
		  <div class="col-12">
		    <label for="contenido" class="form-label">Contenido</label>
		    <div class="form-floating">
			  <textarea class="form-control" style="height: 250px" name="cuerpo" value="<?php echo $this->input->post('cuerpo'); ?>">
			  	
			  </textarea>
			  <label for="floatingTextarea">Descripcion del nuevo Blog</label>
			</div>
		  </div>
		  <div class="col-12">
		    <button type="submit" class="btn btn-success">Publicar</button>
		  </div>
		  <?php echo form_close(); ?>
		</form>
	</div>
</body>
</html>
