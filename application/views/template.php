<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/b3d0b45662.js" crossorigin="anonymous"></script>
<style>
.transparente {
background: url('<?php echo base_url('resources/img/banner-test.jpg');?>');
min-height: 150px;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat;
background-size: cover;
position: relative;
color:white;
}
</style>
</head>
<body>
<div class="transparente">
    <nav class="navbar navbar-expand-lg navbar-dark dark">
        <a class="navbar-brand" href="#">Grupo Nach</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Bolsa de trabajo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('entradas/index'); ?>">Nueva Entrada</a>
                </li>
            </ul>
        </div>

    </nav>
</div>
 <!-- Content -->
        <div class="content" style="padding: 0px 0px !important;">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <?php   if(isset($_view) && $_view)
                    $this->load->view($_view);
                    ?>
              </div>
            </div>    
          </div>
        </div>
<!-- End Content -->
   
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo site_url('resources/js/funciones.js'); ?>"></script>

</html>