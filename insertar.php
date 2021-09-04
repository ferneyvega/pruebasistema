<?php
include("conexion.php");
$con=conectar();

	$idretiro=$_POST['idretiro'];
	$usuarios_id=$_POST['usuarios_id'];
    $descripcion=$_POST['descripcion'];
	$valor_unitario=$_POST['valor_unitario'];
	
	


	$sql="INSERT INTO retiro VALUES('$idretiro', 'usuarios_id', '$descripcion','$valor_unitario')";
	$query= mysqli_query($con,$sql);

if($query){
    Header("Location: retiro.php");
    
}else {
}
?>