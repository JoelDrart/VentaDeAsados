<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/styleEditar.css">
    <title>Ingresar platos</title>
</head>
<body>
    <section class = "IngresoP">

    <div class="Inp_P">
    <center>
        <h1>INGRESO DE PLATOS</h1>
    </center>
        <form action="../Model/MIngresar.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre del plato</label>
            <input type="text" class="form-control" id="" aria-describedby="emailHelp" name="nombreP" required>
        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Descripcion del plato</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcionP" required></textarea>
        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Precio del plato</label>
            <input type="number" class="form-control" id="" name="precioP" step="0.01" min="0.00" required>
        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--> 
        </div>
        <select class="form-select" aria-label="Default select example" name="tipoP" required>
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
        <br>
        <div class="mb-3">
            <label for="formFile" class="form-label">   Imágen del Plato</label>
            <input class="form-control" type="file" id="formFile" name="archivo" required>
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>

        </form>
    </div>
    <div class="Vista_P">
    <center>
        <h1>PLATOS INGRESADOS</h1>
    </center>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Imágen</th>
                <th scope="col">Plato</th>
                <th scope="col">Descripción</th>
                <th scope="col">Precio</th>
                <th scope="col">Tipo</th>
                <th scope="col"><center>Control</center></th>
            </tr>
  </thead>
    <tbody>
        <?php
         include("../Model/MMostrarDPlatos.php");
         ?>
    </tbody>
</table>
    </div>
    </section>

</body>
</html>
