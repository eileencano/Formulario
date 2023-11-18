<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1> Formulario de Libreria</h1>
<form action="validar.php" method="POST">

   
    <label for="nombre">nombre:</label>
    <input type="nombre" id= "nombre" name="nombre" required><br><br>

    <label for="autor">autor:</label>
    <input type="autor" id="autor" name="autor" required><br><br>

    <label for="precio">precio:</label>
    <input type="precio" id= "precio" name= "precio" required><br><br>

    <select class="form-select" name="disponible">
    <option selected>disponible</option>
    <option value="1">Disponible</option>
    <option value="2">No disponible</option>
    </select><br><br><br>

    <input type="submit" value="Enviar">
    <button><a href="mostrar.php">Mostrar datos</a></button>
   
  
  

</form>
</body>
</html>