<?php

        require_once("controllers/auto_controller.php");
        auto_controller::mostrar();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Listado Alquiler de Autos</title>
</head>
<body>

<div class="container-xxl">
    <br>
    <h1 style="text-align:center">Listado de autos en alquiler</h1>
    <br>
<table class="table table-light table-striped table-hover table-bordered table-xxl table-responsive-xxl">
    <thead>
        <tr>
            <th style="text-align:center" scope="col">ID</th>
            <th style="text-align:center" scope="col">Marca</th>
            <th style="text-align:center" scope="col">Modelo</th>
            <th style="text-align:center" scope="col">Precio</th>
            <th style="text-align:center" scope="col">Días de alquiler</th>
            <th style="text-align:center" scope="col">Precio de alquiler</th>
            <th style="text-align:center" scope="col">Foto</th>
            <th style="text-align:center" scope="col">Ver</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach (auto_controller::mostrar() as $auto ){         ?>
        <tr>
            <th style="text-align:center" scope="row"><?php echo $auto->getID()?></th>
            <td style="text-align:center"><?php echo $auto->getMarca()?></td>
            <td style="text-align:center"><?php echo $auto->getmodelo()?></td>
            <td style="text-align:center"><?php echo $auto->getprecio()?></td>
            <td style="text-align:center"><?php echo $num= rand(1,10) ?></td>
            <td style="text-align:center"><?php echo (float) $auto->getprecio() * $num ?>$</td>
            <td style="text-align:center"><img src="<?php echo $auto->getenlaceft()?>" class="img-fluid" alt="..." width="150" height="100"></td>
            <td><p style="text-align:center"><a href="mostrar.php?id=<?php echo $auto->getID()?>"><button type="button" class="btn btn-success">Ver</button></p></a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>