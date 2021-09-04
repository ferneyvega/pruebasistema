<?php

include("conexion.php");
$con=conectar();

$idretiro=$_GET['id'];

	$sql="DELETE FROM retiro WHERE idretiro='$idretiro'";
	$query=mysqli_query($con,$sql);

   		 if($query){
        Header("Location: retiro.php");
    }
?>