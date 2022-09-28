<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Auto Solicitado</title>
</head>
<body style="background-color:#aba9a7;">

<br>
    <div class="container-sm" style="text-align:center; background-color: #c9c8c7; border-radius: 40px; ">
        <?php $dato=$_GET["id"];
        require_once("controllers/auto_controller.php");
        auto_controller::mostrar();
        
        foreach (auto_controller::mostrar() as $auto){
            if( $auto->getID() == $dato){ ?> 
                <h3>Id del auto:</h3>
                <h4><?php echo $auto->getId() ?></h4>
                <h3>Marca:</h3>
                <h4><?php echo $auto->getMarca() ?></h4>
                <h3>Modelo:</h3>
                <h4><?php echo $auto->getmodelo() ?></h4>
                <h3>Precio:</h3>
                <h4><?php echo $auto->getprecio() ?></h4>
                <h3>Dias de Alquiler:</h3>
                <h4><?php echo $num = rand(1,10) ?></h4>
                <h3>Precio a pagar:</h3>
                <h4><?php echo $num * (float) $auto->getprecio() ?></h4>
                <h3>Foto:</h3>
                <h4><img src="<?php echo $auto->getenlaceft() ?>" class="img-fluid" alt="..." width="500" height="300" style="border-radius: 25px;"></h4>
                <a href="index.php"><button type="button" class="btn btn-success">Regresar</button></a>
                <br> <br>





<?php
              }  }




        ?>









    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>