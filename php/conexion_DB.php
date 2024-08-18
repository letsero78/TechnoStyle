<?php 

$conexion = mysqli_connect("localhost", "root", "", "login_register_db");
if($conexion){
    echo 'Conectado Exsitosamente';
}
else{
    echo'no se a podido conectar';
}



?>