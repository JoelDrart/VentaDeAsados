<?php

$conexion = mysqli_connect('localhost','root','','VentaDeAsados');

$sql = "SELECT * FROM plato";

$resultado = mysqli_query($conexion,$sql);

while ($mostrar = mysqli_fetch_array($resultado)) { //recorrer el arreglo $resultado  
   ?>
        <div class="card">
            <img src="../img/platos_IMG/<?php echo $mostrar['imagenP']; ?>" class="card-img-top" alt="Imagen de <?php echo $mostrar['nombrePlato']; ?>">
            <div class="card-body">
                <h3 style="color:white;" class="card-title"><?php echo $mostrar['nombrePlato']?></h3>
                <p style="color:white;" class="card-text" ><?php echo $mostrar['descripcionPlato']?></p>
                <p style="color:white;" class="card-text"><b id="precio<?php echo $mostrar['platoId']; ?>">$<?php echo $mostrar['precio']?></b></p>
                <label for="cantidad<?php echo $mostrar['platoId']; ?>">Cantidad:</label>
                <input type="number" id="cantidad<?php echo $mostrar['platoId']; ?>" name="platoCantidad[<?php echo $mostrar['platoId']; ?>]" min="0" max="10" value="0">
            </div>
        </div>

<?php 
}
?>
