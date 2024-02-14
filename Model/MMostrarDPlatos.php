
<?php

include("../Config/confg.php");

$sql = "SELECT * FROM plato";

$resultado = mysqli_query($conexion,$sql);

while ($mostrar = mysqli_fetch_array($resultado)) { //recorrer el arreglo $resultado
   
   ?>

   <tr>
       <td><?php echo $mostrar['platoId']?></td>
       <td><img width="100" src="../img/platos_IMG/<?php echo $mostrar['imagenP']?>" alt=""></td>
       <td><?php echo $mostrar['nombrePlato']?></td>
       <td><?php echo $mostrar['descripcionPlato']?></td>
       <td><?php echo $mostrar['precio']?></td>
       <td><?php echo $mostrar['tipoId']?></td>
       <td><button type="button" class="btn btn-outline-danger"><a style="color: red; text-decoration: none;" href="../Model/MEliminarPlato.php?id=<?php echo $mostrar["platoId"]?>">>ELIMINAR</a></button>
       <button type="button" class="btn btn-outline-warning"><a href="../View/VEditarPlato.php?id=<?php echo $mostrar["platoId"]?>">EDITAR</a></button></td>
       
   </tr>

<?php 
}
?>

