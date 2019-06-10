<?php
			$idRubro=$_POST['id'];
			$descripcion=$_POST['descripcion'];
			$idDep=$_POST['id_departamento'];
			



include("../conect.php");




$sql= "UPDATE rubro SET  descripcion = '$descripcion' , idDep =  '$idDep' WHERE idRubro=$idRubro";

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