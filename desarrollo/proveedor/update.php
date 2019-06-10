<?php
			$id_proveedor=$_POST['id_proveedor'];
			$nombre=$_POST['nombre'];
			$direccion=$_POST['direccion'];
			$telefono=$_POST['telefono'];
			$email=$_POST['email'];
			$rfc=$_POST['rfc'];
			$contacto=$_POST['contacto'];
			$plazoCred=$_POST['plazoCred'];
			$estado=$_POST['estado'];

echo $id_proveedor ;

include("../conect.php");




$sql= "UPDATE proveedor SET id_proveedor = $id_proveedor , nombre = '$nombre' , direccion = '$direccion' , telefono =  $telefono , email = '$email' , rfc= '$rfc' , contacto= '$contacto' , plazoCred = $plazoCred , estado = '$estado'  WHERE id_proveedor=$id_proveedor";

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