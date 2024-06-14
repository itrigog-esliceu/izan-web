<?php
//parametros de conexión
$servername="localhost";
$username="izan";
$password="itrigog";
$dbname="formacion";

//crear conexion
$conn=new mysqli($servername,$username,$password,$dbname);

//comprobar conexión
if($conn->connect_error){
    //la conexión ha fallado
    die("Connection failed: ". $conn->connect_error);
}

//echo "La conexión ha sido un exito"
