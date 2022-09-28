<?php

        require_once("controller/lista_controllers.php");
        veg_controller::mostrar();
        frut_controller::mostrar();
        carne_controller::mostrar();
        todos_controller::mostrar();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Listado de compras</title>
</head>
<body>

<div class="container-xxl" style="width:500px; margin: 0 auto;">
    <br>
    <h1 style="text-align:center">Listado</h1>
    <br>
    <form name="calcular" action="index.php" method="post">
    <div style="width:450px; margin: 0 auto;" class="btn-group" role="group" aria-label="Basic radio toggle button group">
        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" value="veg" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio1">Vegetales</label>
    
        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" value="frut" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio2">Frutas</label>
    
        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" value="car" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio3">Carnes</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio4" value="all" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio4">Todos</label>
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>
<br>
</div>

<?php if ($_POST){ ?>
<table class="table table-light table-striped table-hover table-bordered table-xxl table-responsive-xxl">
    <thead>
        <tr>
            <th style="text-align:center" scope="col">Nombre</th>
            <th style="text-align:center" scope="col">Categoría</th>
            <th style="text-align:center" scope="col">Calorías(100g)</th>
            <th style="text-align:center" scope="col">Carbohidratos(100g)</th>
            <th style="text-align:center" scope="col">Proteínas(100g)</th>
            <th style="text-align:center" scope="col">Imagen</th>

    </thead>
    <tbody>
    
       <?php if ($_POST['btnradio'] == "veg"){
            foreach (veg_controller::mostrar() as $veg ){ ?>
                <tr>
                <th style="text-align:center" scope="row"><?php echo $veg->getNombre()?></th>
                <td style="text-align:center"><?php echo $veg->getCategoria()?></td>
                <td style="text-align:center"><?php echo $veg->getCalorias()?></td>
                <td style="text-align:center"><?php echo $veg->getCarbs()?></td>
                <td style="text-align:center"><?php echo $veg->getProt()?></td>
                <td style="text-align:center"><img src="<?php echo $veg->getenlace()?>" class="img-fluid" alt="..." width="150" height="100"></td>
                </tr>

            <?php
       } 
    } else if ($_POST['btnradio'] == "frut"){
        foreach (frut_controller::mostrar() as $frut ){ ?>
       <tr>
                <th style="text-align:center" scope="row"><?php echo $frut->getNombre()?></th>
                <td style="text-align:center"><?php echo $frut->getCategoria()?></td>
                <td style="text-align:center"><?php echo $frut->getCalorias()?></td>
                <td style="text-align:center"><?php echo $frut->getCarbs()?></td>
                <td style="text-align:center"><?php echo $frut->getProt()?></td>
                <td style="text-align:center"><img src="<?php echo $frut->getenlace()?>" class="img-fluid" alt="..." width="150" height="100"></td>
                </tr>
      
      <?php
        }

    } else if ($_POST['btnradio'] == "car"){
        foreach (carne_controller::mostrar() as $carne ){ ?>
                <tr>
                <th style="text-align:center" scope="row"><?php echo $carne->getNombre()?></th>
                <td style="text-align:center"><?php echo $carne->getCategoria()?></td>
                <td style="text-align:center"><?php echo $carne->getCalorias()?></td>
                <td style="text-align:center"><?php echo $carne->getCarbs()?></td>
                <td style="text-align:center"><?php echo $carne->getProt()?></td>
                <td style="text-align:center"><img src="<?php echo $carne->getenlace()?>" class="img-fluid" alt="..." width="150" height="100"></td>
                </tr>
<?php
        }
    } else if ($_POST['btnradio'] == "all"){
     foreach (todos_controller::mostrar() as $todos ){ ?>
                <tr>
                <th style="text-align:center" scope="row"><?php echo $todos->getNombre()?></th>
                <td style="text-align:center"><?php echo $todos->getCategoria()?></td>
                <td style="text-align:center"><?php echo $todos->getCalorias()?></td>
                <td style="text-align:center"><?php echo $todos->getCarbs()?></td>
                <td style="text-align:center"><?php echo $todos->getProt()?></td>
                <td style="text-align:center"><img src="<?php echo $todos->getenlace()?>" class="img-fluid" alt="..." width="150" height="100"></td>
                </tr>
<?php
    }
}
       ?>  
    </tbody>
</table>

<?php } ?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>