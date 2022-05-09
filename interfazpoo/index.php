<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<div class="row justify-content-md-center">
<div class="card" style="width: 20rem;" >
<div class="card-body">
    <form action="guardar.php" method="post">
        <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Digite el nombre del estudiante">
        
        </div>
        <div class="mb-3">
        <label for="nota" class="form-label">Nota</label>
        <input type="number" class="form-control" id="nota" name="nota" min="0" max="5" >
        
        </div>
        <div class="mb-3">
        <label for="materia" class="form-label">Materia</label>
        <input type="text" class="form-control" id="materia" name="materia" placeholder="Ingrese la materia" >
        
</div>
        <button class="btn btn-outline-info">Guardar</button>
    </form>
    </div>
    </div>
</div>
</body>
</html>