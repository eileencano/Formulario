<?php
include 'conexion.php' ;

$nombre=$_POST["nombre"];
$autor=$_POST["autor"];
$precio=$_POST["precio"];
$disponible=$_POST["disponible"];

$sql ="INSERT INTO libros(nombre,autor,precio,disponible) VALUES ('$nombre', '$autor','$precio','$disponible')";

if ($conn->query($sql) === TRUE) {
    header("Location: mostrar.php");
} else {
    echo "Error: " .$sql .$conn->error;
}
$conn->close();
?>