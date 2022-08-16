<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body><br>
	<span></span>
	<div class="container">	
		<div class="row row-cols-auto">
			<div class="col-4">
			<?php foreach($entradasb as $b){ ?>
				<div class="card" style="width: 18rem;">
			  		<img src="https://png.pngtree.com/thumb_back/fh260/background/20210805/pngtree-dark-red-maroon-background-with-stiples-and-bokeh-effect-image_757695.jpg" class="card-img-top" alt="">
				  	<div class="card-body">
					    <h5 class="card-title"><?php echo $b['titulo']; ?></h5>
				        <h6 class="card-subtitle mb-2 text-muted">Autor:<?php echo $b['autor']; ?></h6>

					    <p class="card-text"><?php echo $b['cuerpo']; ?></p>
					      	<ul class="list-group list-group-flush">
							    <li class="list-group-item">Fecha de Creacion</li>
							    <li class="list-group-item"><?php echo $b['fechadeentrada']; ?></li>
							</ul>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
			  		</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
	
</body>
</html>				