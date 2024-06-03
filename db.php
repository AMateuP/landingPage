<?php
//parametros de conexion
$servername="localhost";
$username="toni";
$password="12345";
$dbname="formacion";

//crear conexion
$conn=new mysqli($servername,$username,$password,$dbname);

//comprobar conexion
if($conn->connect_error){
    die("La conexion ha fallado: ".$conn->connect_error);
}

//echo "La conexion ha sido un exito";