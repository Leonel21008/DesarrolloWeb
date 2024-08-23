<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Agg Nuebo Libro</title>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Agg Nuevo Libro</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Salir</a>
            </div>
        </header>
        
        <form action="process.php" method="post">
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="title" placeholder="Titulo del Libro:">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="author" placeholder="Nombre del Autor:">
            </div>
            <div class="form-elemnt my-4">
                <select name="tipo" id="" class="form-control">
                    <option value="">Seleccionar Tipo de Libro:</option>
                    <option value="Aventura">Aventura</option>
                    <option value="Crimen">Crimen</option>
                    <option value="Fantasia">Fantasia</option>
                    <option value="Horror">Horror</option>
                </select>
            </div>
            <div class="form-element my-4">
                <textarea name="Descripcion" id="" class="form-control" placeholder="Book Description:"></textarea>
            </div>
            <div class="form-element my-4">
                <input type="submit" name="create" value="Agg Libro" class="btn btn-primary">
            </div>
        </form>
        
        
    </div>
</body>
</html>