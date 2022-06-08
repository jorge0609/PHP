<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$tipo_de_animal=$_POST['tipo_de_animal'];
$edad_meses=$_POST['edad_meses'];
$enfermedades=$_POST['enfermedades'];


$sql="INSERT INTO mascotas VALUES('$nombre','$tipo_de_animal','$edad_meses','$enfermedades')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: mascotas.php");
    
}else {
}
?>