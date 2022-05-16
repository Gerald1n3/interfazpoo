<?php
require_once './Class/Nota.php';

$nota = new Nota ();

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

<body>
<form>   
<div  class="card" style= "width:18rem;">
    <div  class ="card-body">
         <?php $nota->listNote(); ?>
    </div>
    <a href="index.php"><input type="button"  class="btn btn-outline-info" value="volver"></a>
</div>
</form>
</body>
</html>