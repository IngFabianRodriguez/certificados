<?php
    include '../inc/conexion.php';
    $link=conectar();
    $nombre=$_REQUEST['nom_user'];
    $mail=$_REQUEST['email_user'];
    $identificacion=$_REQUEST['id_user'];
    $rol=$_REQUEST['rol_user'];
    $psw="default_password";
    $sql= "INSERT INTO `usuarios` (`Nombre`, `Correo`, `Contraseña`, `Identificacion`, `rol`) 
    VALUES ('$nombre', '$mail', '$psw', '$identificacion', '$rol')";
    $result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));
    echo "<script type='text/javascript'>
    alert('Usuario ingresado con exito al sistema');
    window.location='../admonuser/listusers.php';
    </script>";
?>