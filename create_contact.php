<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD']=="POST"){
    echo "Creando contacto nuevo <br>";
    $nombre=$_POST['Nombre'];
    $telefono=$_POST['Teléfono'];
    $correo=$_POST['Correo'];
    $mensaje=$_POST['Mensaje'];
    
    echo "Nombre: " .$nombre. "<br>";
    echo "Telefono: " .$telefono. "<br>";
    echo "Correo: " .$correo. "<br>";
    echo "Mensaje: " .$mensaje. "<br>";
    $sql="INSERT INTO contactos (nombre,telefono,correo,mensaje) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss",$nombre,$telefono,$correo,$mensaje);
    $result = $stmt->execute();

    if($result){
        $stmt->close();
        $conn->close();
        echo "Contacto creado con esxito";
        header("Location: Contacto.php?status=success&msg=Mensaje Guardado!");
    }
}else{
    echo "Error en el metodo post";
    header("Location: contacto.php?status=error&msg=Error Guardando Mensaje!");
}