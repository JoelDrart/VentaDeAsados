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
    include("../View/VInicioCliente.php");
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
{
    echo "Ninguna opción";
}
?>