<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

    <title>buscar</title>


</head>
<body>
   
    <form action="buscar.php" method="post">
        <h1> Buscar </h1>
        <div class="mb-3">
            <label for="nombre" class="from-label">Nombre</label>
            <input type="text" class="from-control" id="nombre" name="nombre" aria-placeholder="Digite el nombre del estudiante" required>
        </div>
        <input type="submit"  class="btn btn-outline-info" class="button" value="Buscar">
       </form>

  
    

    
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>