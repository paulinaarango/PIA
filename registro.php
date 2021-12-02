<?php
include("con_db.php");

if ($conex){
    echo "todo correcto"
}
if (isset($_POST['enviando'])){
    if(strlen($_POST['nombre']) >=1 &&
strlen($_POST['apellido']) < 1 &&
strlen($_POST['correo electronico']) < 1 &&
strlen($_POST['nickname']) < 1 &&
strlen($_POST['contrasena']) < 1){
    $nombre= ($_POST['nombre']);
    $apellido= ($_POST['apellido']);
    $correo= ($_POST['correo electronico']);
    $nick= ($_POST['nickname']);
    $contrasena= ($_POST['contrasena']);
    $consulta="INSERT INTO datos(nombre,apellido,correo electronico,contrasena,nickname) VALUES ('$nombre','$apellido','$correo','$nick','$contrasena')";
    $resultado= mysqli_query($conex, $consulta);
    if ($resultado){
        ?>
        <h3> Te has inscrito</h3>
        <?php}
        else{
            ?>
        <h3> Hay error</h3>
        <?php

        }

    }
}
}


?>