<?php
include("../Config/confg.php");

// Verificar si se recibió un ID de plato para editar
if(isset($_GET['id'])) {
    $platoId = $_GET['id'];
    
    // Obtener los datos del plato desde la base de datos
    $sql = "SELECT * FROM Plato WHERE platoId = $platoId";
    $resultado = mysqli_query($conexion, $sql);
    
    if(mysqli_num_rows($resultado) > 0) {
        $plato = mysqli_fetch_assoc($resultado);
        $nombrePlato = $plato['nombrePlato'];
        $descripcionPlato = $plato['descripcionPlato'];
        $precioPlato = $plato['precio'];
        $tipoId = $plato['tipoId'];
    } else {
        echo "Plato no encontrado.";
        exit; // Terminar la ejecución del script si el plato no existe
    }
} else {
    echo "ID de plato no especificado.";
    exit; // Terminar la ejecución del script si no se especificó un ID de plato
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Editar plato</title>
</head>
<body>
    <section class="IngresoP" >
    
            <h1>Editar plato</h1>
        
        <div class="Inp_P">
            <form action="../Model/MEditarPlato.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="platoId" value="<?php echo $platoId; ?>">
                <div class="mb-3">
                    <label for="nombreP" class="form-label">Nombre del plato</label>
                    <input type="text" class="form-control" id="nombreP" name="nombreP" value="<?php echo $nombrePlato; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="descripcionP" class="form-label">Descripción del plato</label>
                    <textarea class="form-control" id="descripcionP" name="descripcionP" required><?php echo $descripcionPlato; ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="precioP" class="form-label">Precio del plato</label>
                    <input type="number" class="form-control" id="precioP" name="precioP" step="0.01" min="0.00" value="<?php echo $precioPlato; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="tipoP" class="form-label">Tipo del plato</label>
                    <select class="form-select" id="tipoP" name="tipoP" required>

                    <option value = 1>Sopas</option>
                    <option value = 2>Light</option>
                    <option value = 3>Tablitas</option>
                    <option value = 4>Hamburguesas</option>
                    <option value = 5>Niños</option>
                    <option value = 6>Porciones</option>
                    <option value = 7>Cortes PREMIUM</option>
                    <option value = 8>Mar</option>
                    <option value = 9>Churrascos</option>
                    <option value = 10>Alitas</option>
                    <option value = 11>Mexicana</option>
                    <option value = 12>Menestras</option>
                    <option value = 13>Picaditas</option>
                    <option value = 14>Bebidas</option>

                    </select>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Imágen del plato</label>
                    <input class="form-control" type="file" id="formFile" name="archivo">
                </div>
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </form>
        </div>
    </section>
</body>
</html>
