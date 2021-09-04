<?php

include("conexion.php");
$con=conectar();

	$idretiro=$_POST['idretiro'];
	$usuarios_id=$_POST['usuarios_id'];
    $descripcion=$_POST['descripcion'];
	$valor_unitario=$_POST['valor_unitario'];
	
	

	$sql="UPDATE retiro SET usuarios_id='usuarios_id',descripcion='$descripcion',valor_unitario='$valor_unitario' WHERE idretiro='$idretiro'";
	$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: retiro.php");
    }
?>