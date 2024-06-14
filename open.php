<?php
include 'db.php';
include 'header.php';
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];
    $sql = "SELECT id, nombre, telefono, correo, mensaje FROM contactos";
    $result=$conn->query($sql);
}
?>

<h2>Mensaje abierto</h2>