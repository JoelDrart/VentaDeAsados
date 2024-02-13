<?php
include("../Config/confg.php");
$sql = "SELECT * FROM datos";
$resultado = mysqli_query($conexion, $sql);

while($mostar = mysqli_fetch_array($resultado))
{
?>
<tr>
    <td><?php echo $mostar['id']?> </td>
    <td><?php echo $mostar['nombre']?> </td>
    <td><?php echo $mostar['apellido']?> </td>
    <td><?php echo $mostar['clave']?> </td>
    <td><a href="../Model/MEliminarCliente.php?id=<?php echo $mostar['id']?>">Eliminar</a></td>
    <td><a href="../Model/MMEditarCliente.php?id=<?php echo $mostar['id']?>">Editar</a></td>
    
    </tr>

<?php
}
?>