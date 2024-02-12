<?php
$v1=$_GET['var1'];
if($v1==1){
    include("../View/VLogin.php");
}
else
{
    echo "Ninguna opción";
}
?>