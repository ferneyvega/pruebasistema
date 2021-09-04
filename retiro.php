<?php 

include ("conexion.php");
$con=conectar();

 $sql="SELECT *  FROM retiro";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
 ?>

 <!DOCTYPE html>
<html lang="en">
    <head>
        <title> Retiro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
         <div class="container mt-5">
              <div class="row"> 
                        
              <div class="col-md-4">
                    <h1>Registre datos</h1>
                      <form action="insertar.php" method="POST">

                         <input type="text" class="form-control mb-5" name="idretiro" placeholder="idretiro">
                         <input type="text" class="form-control mb-5" name="usuarios_id" placeholder="usuarios_id">
                         <input type="text" class="form-control mb-5" name="descripcion" placeholder="Descripcion">
                         <input type="text" class="form-control mb-5" name="valor_unitario" placeholder="Valor_Unitario">
                         
                                    
                         <input type="submit" class="btn btn-warning">
                                </form>
                        </div>

                        <div class="col-md-9">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                      <th>Retiro</th>
                                       <th>Usuarios_Id</th>
                                       <th>Descripción</th>
                                      <th>Valor_Unitario</th>
                                     
                                    
                                      <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                   <?php
                                        while($row=mysqli_fetch_array($query)){
                                    ?>
                                      <tr>
                                      <th><?php  echo $row['idretiro']?></th>
                                      <th><?php  echo $row['usuarios_id']?></th>
                                      <th><?php  echo $row['descripcion']?></th>
                                      <th><?php  echo $row['valor_unitario']?></th>
                                       
                                      
                                      <th><a href="actualizar.php?id=<?php echo $row['idretiro'] ?>" class="btn btn-info">Modificar</a></th>
                                      <th><a href="delete.php?id=<?php echo $row['idretiro'] ?>" class="btn btn-danger">Borrar</a></th>                                        
                                      </tr>
                                      <?php 
                                            }
                                       ?>
                             </tbody>
                            </table>
                            </div>
                          </div>  
                       </div>
                  </body>
              </html>