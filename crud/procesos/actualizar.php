<?php
    require_once "../conexion.php";
    require_once "../metodosCrud.php";

    $nombre=$_POST['txtNombre'];
    $apellido=$_POST['txtApellido'];
    $id=$_POST['id'];

    $datos=array(
        $nombre,
        $apellido,
        $id
    );
    $obj= new metodos();

    if ($obj->actualizaDatosNombre($datos)==1) {
        header("location:../index.php");
    }else{
        echo "fallo al agregar";
    }
?>