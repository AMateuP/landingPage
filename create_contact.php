<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    echo "Creando contacto nuevo <br>";
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $mensaje=$_POST['mensaje'];
    
    echo "Nombre: " .$nombre. "<br>";
    echo "Telefono: " .$telefono. "<br>";
    echo "Correo: " .$correo. "<br>";
    echo "mensaje: " .$mensaje. "<br>";
}else{
    echo "Error en el metodo post";
}