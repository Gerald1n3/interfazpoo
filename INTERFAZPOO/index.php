<!DOCTYPE html>
<html lang="es">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <title>Sistema de notas</title>
  


</head>

<nav></nav>

<body class="col-auto  p-5 text-center" >

<h1>Sistema de notas</h1>
    <form action ="guardar.php" method="post">
       

        <div class="mb-3">
            <label for="nombre" class="from-label">Nombre</label>
            <input type="text" class="from-control" id="nombre" name="nombre" aria-placeholder="Digite el nombre del estudiante" required>
        </div>
        <div class="mb-3">
            <label for="materia" class="from-label">Materia</label>
            <input type="text" class="from-control" id="materia" name="materia" aria-placeholder="Digite la asignatura" required>
        </div>
        <div class="mb-3">
        <label for="nota" class="from-label">Nota</label> 
            <input type="number" class="from-control" min="0" max="5" id="nota" name="nota" required>
        
        </div>
        <input type="submit" class="btn btn-outline-info" class="button" class="btn btn-outline-info" value="Guardar">
       
        <a href="listar.php"><input type="button" class="btn btn-outline-info" class="button" value="listar"></a>
    </form> 

    <a href="indexeliminar.php"><input type="submit"  class="btn btn-outline-info" class="button" value="Eliminar"></a>
    <a href="indexbuscar.php"><input type="submit"  class="btn btn-outline-info" class="button" value="Buscar"></a>
    <a href="indexactualizar.php"><input type="submit"  class="btn btn-outline-info" class="button" value="Actualizar"></a>
      
   
    
    

  
    

    
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>