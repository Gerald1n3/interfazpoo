<?php
require_once './Class/Nota.php';

$nota= new Nota ();
$nombre=$nota->setnombre($_POST['nombre']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Resultado de busqueda</title>
    

</head>

<body class="col-auto bg-danger p-5 text-center">
<form class="col-auto bg-danger p-5 text-center">   
<div  center class="card" style= "width:18rem;">
    <div  class ="card-body">
    <?php $nota->searchNote($nota->getnombre()); ?>
    
    
    </div>
    <a href="index.php"><input class="btn btn-outline-info" class="button" value="volver"></a>
</div>
</form>
</body>
</html>