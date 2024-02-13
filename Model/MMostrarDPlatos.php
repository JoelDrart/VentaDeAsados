<?php

include("../Config/confg.php");

$sql = "SELECT * FROM plato";

$resultado = mysqli_query($conexion,$sql);

while ($mostrar = mysqli_fetch_array($resultado)) { //recorrer el arreglo $resultado
   
   ?>

   <tr>
       <td><?php echo $mostrar['platoId']?></td>
       <td><?php echo $mostrar['nombrePlato']?></td>
       <td><?php echo $mostrar['descripcionPlato']?></td>
       <td><?php echo $mostrar['precio']?></td>
       <td><?php echo $mostrar['tipoId']?></td>
       <td><button type="button" class="btn btn-outline-danger">ELIMINAR</button>
       <button type="button" class="btn btn-outline-warning">EDITAR</button></td>
       
   </tr>

<?php 
}
?>