<?php
session_start();

$v1=$_GET['var1'];

if($v1==1){
    include("../View/VIinicio.php");
}
else 
if($v1==2){
    include("../View/VLogin.php");
}
else
if($v1==3){
   include("../View/VRegistrar.php");
}
else
if($v1==4){
    
}
else
if($v1==5){
    include("../View/VInicioAdmin.php");
}else
if($v1==6){
    include("../View/VEditarClientes.php");
}
if($v1==7){
    if (!isset($_SESSION['userId'])) {
        echo "<h1>Error: Acceso no permitido</h1>";
        
    }else{
        include("../View/VReservas.php");
    }   
}
else 
if($v1==8){
    include("../View/VProductos.php");
}
else 
if($v1==9){
    include("../View/VEliminarCliente.php");
}
else
{
    echo "Ninguna opción";
}
?>