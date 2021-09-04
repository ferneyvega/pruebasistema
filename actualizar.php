<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM retiro WHERE idretiro='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Modificar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-6">
                    <form action="update.php" method="POST">
                    
                            <input type="hidden" name="idretiro" value="<?php echo $row['idretiro']  ?>">
                            <input type="hidden" name="usuarios_id" value="<?php echo $row['usuarios_id']  ?>">  
                      
                            <input type="text" class="form-control mb-4" name="descripcion" placeholder="Descripcion" value="<?php echo $row['descripcion']  ?>">
                            
                            <input type="text" class="form-control mb-4" name="valor_unitario" placeholder="Valor_Unitario" value="<?php echo $row['valor_unitario']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Modificar">
                    </form>
                    
                </div>
    </body>
</html>