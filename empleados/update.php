<?php
			$idEmpleado=$_POST['id'];
			$numEmpleado=$_POST['numEmpleado'];
			$nomEmpleado=$_POST['nomEmpleado'];
			$apellidoPat=$_POST['apellidoPat'];
			$apellidoMat=$_POST['apellidoMat'];
			$departamento=$_POST['id_departamento'];
			$direccion=$_POST['direccion'];
			$telefono=$_POST['telefono'];
			$email=$_POST['email'];



include("../conect.php");




$sql= "UPDATE `empleado` SET `idEmpleado`='$idEmpleado',`numEmpleado`='$numEmpleado',`nomEmpleado`='$nomEmpleado',`apellidoPat`='$apellidoPat',`apellidoMat`='$apellidoMat',`departamento`='$departamento',`direccion`='$direccion',`telefono`='$telefono',`email`='$email' WHERE idEmpleado='$idEmpleado'";

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