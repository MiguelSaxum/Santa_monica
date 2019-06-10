<?php
			$id_clientes=$_POST['id_clientes'];
			$nombre=$_POST['nombre'];
			$direccion=$_POST['direccion'];
			$telefono=$_POST['telefono'];
			$email=$_POST['email'];
			$rfc=$_POST['rfc'];
			$plazoCred=$_POST['plazoCred'];
			$ciudad=$_POST['ciudad'];
			$estado=$_POST['estado'];
			$dpto=$_POST['dpto'];
echo $id_clientes ;

include("../conect.php");

//1 . Materiales 2 . Contabilidad 3 . Prod. Quimicos


$sql= "UPDATE cliente SET id_clientes = $id_clientes , nombre = '$nombre' , direccion = '$direccion' , telefono =  $telefono , email = '$email' , rfc= '$rfc' , plazoCred = $plazoCred , ciudad= '$ciudad' , estado = '$estado', dpto= '$dpto'  WHERE id_clientes=$id_clientes";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
header("location:menu.php");
?> 
<form action="menu.php">
<input type="submit" name="submit" value="Regresar"/>
</form>0