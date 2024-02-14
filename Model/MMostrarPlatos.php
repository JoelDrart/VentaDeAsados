<?php

include("../Config/confg.php");

$sql = "SELECT * FROM plato";

$resultado = mysqli_query($conexion,$sql);

while ($mostrar = mysqli_fetch_array($resultado)) { //recorrer el arreglo $resultado  
   ?>
        <div class="card">
            <img width="100" src="../img/platos_IMG/<?php echo $mostrar['imagenP']?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 style="color:white;" class="card-title"><?php echo $mostrar['nombrePlato']?></h3>
            <p style="color:white;" class="card-text"><?php echo $mostrar['descripcionPlato']?></p>
            <p style="color:white;" class="card-text"><b>$<?php echo $mostrar['precio']?></b></p>
            <a href="../controller/controlador.php?var1=7" class="btn btn-primary">Reservar</a>
            <a href="../View/VOpinar.php?idPlato=<?php echo $mostrar['platoId'] ?>" class="btn btn-primary">Puntúame</a>
        </div>
        </div>

<?php 
}
?>

