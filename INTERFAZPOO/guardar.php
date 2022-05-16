<?php
require_once './Class/Nota.php';

$nota = new Nota ();
$nota->setnombre($_POST['nombre']);
$nota->setmateria($_POST['materia']);
$nota->setnota($_POST['nota']);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Resultado Nota</title>
</head>
<body class="col-auto bg-danger p-5 text-center">
    <div class="card" style= "width:18rem;">
    <div class ="card-body">
        <h5 class="card-text">Nota de <?php echo $nota ->getnombre(); ?></h5>
        <p class ="card-text"><?php echo $nota->getmateria();?>:<?php echo $nota->getnota();?> </p>
        <H3><?php $nota->estado();?></H3>
        <a href ="index.php"><input type="button" class="btn btn-outline-info" class="button" value="Volver"></a>
    </div>
</div>

<div class="card" style= "width:18rem;">
    <div class ="card-body">
        <h5 class="card-text"><?php echo $nota->saveNote(); ?></h5>
    </div>
</div>
    
</body>
</html>
