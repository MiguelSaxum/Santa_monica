<?php
			$idUsuarios=$_POST['idd'];
			$nivSeg=$_POST['idnivelSeguridad'];
			$nomUs=$_POST['nomUs'];
			$apellidoUs=$_POST['apellidoUs'];
			$fechaIng=$_POST['fechaIng'];
			$fechaNac=$_POST['fechaNac'];
			$email=$_POST['email'];
			$passUs=$_POST['passUs'];



include("../conect.php");




$sql= "UPDATE usuarios SET idUsuarios = $idUsuarios , nivelSeguridad_idnivelSeguridad = $nivSeg , nomUs = '$nomUs' , apellidoUs =  '$apellidoUs' , fechaIng = '$fechaIng' , fechaNac = '$fechaNac' , email = '$email' , passUs = '$passUs' WHERE idUsuarios=$idUsuarios";

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
</form>