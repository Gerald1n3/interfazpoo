<?php
require_once './Class/Note.php';
$nota = new Note();
$nota->setNombre($_POST['nombre']);
$nota->setNota($_POST['nota']);
$nota->setMateria($_POST['materia']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="row justify-content-md-center"> 
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-text">Nota de <?php echo $nota->getNombre(); ?></h5>
        <p class="card-text"><?php echo $nota->getNota();?></p>
        <p class="card-text">Materia: <?php echo $nota->getMateria();?></p>
        <button class="btn btn-outline-info"><?php $nota->estado();?></button>
    </div>
    </div>
    </div>
</body>
</html>
