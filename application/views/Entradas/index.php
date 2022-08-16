<body>
	<br>
	<div class="container">
		<center><h5>Entradas del blog</h5></center>
	</div>	<br>
	<div class="container">
		<!--<a class="btn btn-success" href="<?php echo base_url('entradas/add'); ?>" role="button">Nueva entrada</a>-->
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalAdd">
		  Nuevo Blog
		</button>
	</div><br>
	
	<div class="container">
		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">Titulo</th>
		      <th scope="col">Autor</th>
		      <th scope="col">Contenido</th>
		      <th scope="col">Fecha de Creacion</th>
		      <th scope="col">Acciones</th>
		    </tr>
		  </thead>
		  <tbody>
		  	 <?php foreach($entradasb as $b){ ?>
		    <tr>
		      <th scope="row"><?php echo $b['titulo']; ?></th>
		      <td><?php echo $b['autor']; ?></td>
		      <td><?php echo $b['cuerpo']; ?></td>
		      <td><?php echo $b['fechadeentrada']; ?></td>
		      <td>
                <!--Botón -->
                <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#ModalEdit" onclick="blogedit(<?php echo $b['id']; ?>)" >
                	<i class="fa-solid fa-pen-to-square"></i>
                </button>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#ModalDel">
                	<i class="fa-solid fa-trash-can"></i>
                </button>                
              </td>
		    </tr>
		    <?php } ?>
		  </tbody>
		</table>
	</div>
<!-- Modal neuvo blog -->
<div class="modal fade" id="ModalAdd" tabindex="-1" aria-labelledby="ModalAdd" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Entrada del blog</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <?php echo form_open('entradas/add',array("id"=>"entradasAdd")); ?>
      <div class="modal-body">
          <div class="mb-4">
            <label for="titulo" class="col-form-label">Titulo:</label>
            <input type="text" name="titulo" value="<?php echo $this->input->post('titulo'); ?>" class="form-control" id="titulo" required>
             <span class="text-danger"><?php echo form_error('titulo');?></span>
          </div>
          <div class="mb-4">
            <label for="autor" class="col-form-label">Autor:</label>
            <input type="text"  name="autor" value="<?php echo $this->input->post('autor'); ?>" class="form-control" id="autor" required>
          </div>
          <div class="mb-4">
            <label for="contenido" class="col-form-label">Contenido:</label>
            <textarea class="form-control" name="cuerpo" value="<?php echo $this->input->post('cuerpo'); ?>" id="contenido" required>
            </textarea>
          </div> 
          <input type="hidden" name="fechadeentrada" value="<?php echo $this->input->post('fechadeentrada') ? $this->input->post('fechadeentrada') : date('Y-m-d'); ?>">       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success">Publicar</button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
<!--Termina Modal neuvo blog -->
<!-- Modal Eliminar -->
<div class="modal fade" id="ModalDel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      	
        <p class="text-danger"><i class="fa-solid fa-triangle-exclamation"></i>Alerta</p>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <p class="text-danger">¿Estas seguro de que deseas eliminar este blog?</p>
       <p class="text-danger">Esta accion no se puede Deshacer</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
        <a href="<?php echo site_url('entradas/remove/'.$b['id']); ?>" type="button" class="btn btn-danger">Eliminar</a>
      </div>
    </div>
  </div>
</div>
<!-- Termina Modal Eliminar -->
<!-- Modal Editar -->
<div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edita el Blog</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <?php echo form_open('entradas/edit/',array("id"=>"beditar")); ?>
      <div class="modal-body">
        <div class="mb-4">
            <label for="titulo" class="col-form-label">Titulo:</label>
            <input type="text" name="titulo" class="form-control" id="edittitulo">
          </div>
          <div class="mb-4">
            <label for="autor" class="col-form-label">Autor:</label>
            <input type="text"  name="autor" class="form-control" id="editautor">
          </div>
          <div class="mb-4">
            <label for="contenido" class="col-form-label">Contenido:</label>
            <textarea class="form-control" name="cuerpo" id="editcuerpo">
            </textarea>
          </div>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
<!-- Termina Modal Editar -->
<?php echo base_url(); ?>
</body>
<script type="text/javascript" src="<?php echo base_url('resources/js/funciones.js'); ?>"></script>
<script
			  src="https://code.jquery.com/jquery-3.6.0.js"
			  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			  crossorigin="anonymous"></script>

</html>