<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Potrero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <br>
    <!-- header -->
    <header class="col-12 text-logo">
        <div class="col-12 text-logo">
          <h2 class="col-12 col-md-3 text-marca">Tienda Potrero</h2>
        </div>
        </header>
        <br>
    <!-- botones filtros -->
    <nav class="container">
    <div class="container-fluid filtros">
    <button class="btn btn-warning btn-lg filtrobtn" type="submit" >
      <a class="btn btn-warning" href="tiendapotrero.php">Todos los productos</a></button>
    <button class="btn btn-warning btn-lg filtrobtn" type="submit" >
      <a class="btn btn-warning" href="cons_buzo.php">...Buzos</a></button>
    <button class="btn btn-warning btn-lg filtrobtn" type="submit" >
      <a class="btn btn-warning" href="cons_nike.php">...Productos Nike</a></button>
      <button class="btn btn-warning btn-lg filtrobtn" type="submit" >
      <a class="btn btn-warning" href="cons_mas500.php">...Más de $500</a></button>
    </div>
    </nav>
        <!-- prendas -->
        <br>
        <section class="container-fluid cardsropa">
    <div class="row contenedor-cards">
            <!-- conexion -->
  <?php
  $conexion=mysqli_connect("127.0.0.1","root","");
  mysqli_select_db($conexion,"tiendapotrero");
  // orden SQL
  $consulta= "SELECT*FROM ropa WHERE tipo_de_prenda = 'buzo' ";
  // ejecutar orden y tener registros
  $datos= mysqli_query ($conexion, $consulta);
  // WHILE recorre registros y crea una CARD de cada uno
  $datos= mysqli_query ($conexion, $consulta);
  while ($reg = mysqli_fetch_array($datos)) {?>
    <div class="card col-sm-12 col-md-6 col-lg-3 text-bg-danger mb-3 card-ppal">
      <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>" 
      alt="prenda">
      <div href="ver.php?id=<?php echo $reg['id'];?>" class="card-body">
        <h5 class="card-title"><?php echo ucwords($reg['marca']) ?></h5>
        <p class="card-text prenda"><?php echo ucwords($reg['tipo_de_prenda']) ?></p>
        <span class="precio" >$ <?php echo $reg['precio']; ?></span>
        <p class="card-text"><small class="text-muted">@tiendapotrero</small></p>
      </div>
    </div>
    <?php } ?>
  </div>      
<br>
</section>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>