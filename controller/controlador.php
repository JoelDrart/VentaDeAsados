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
    include("../View/VReportes.php");;
}
else
if($v1==5){
    include("../View/VInicioAdmin.php");
}else
if($v1==6){
    include("../View/VEditarClientes.php");
}
if($v1==7){
    include("../View/VReservas.php");
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
if($v1==10){
    include("../View/VEditarPlato.php");
}
else 
if($v1==11){
    include("../Model/MReporte1.php");
}else 
if($v1==12){
    include("../Model/MReporte2.php");
}

else
if($v1==13){
    include("../Model/MReporte3.php");
}else
if($v1==14){
    include("../Model/MReporte4.php");
}else
if($v1==16){
    include("../Model/MReporte6.php");
}

else
if($v1==15){
    include("../Model/MReporte5.php");
}


else
if($v1==21){
    // AYUDAAA AQUIIIIIII
    // include("../Model/MReporte5.php");
}
else
{
    echo "Ninguna opción";
}
?>