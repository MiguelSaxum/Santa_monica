<?php
			$id_departamento=$_POST['id_departamento'];
			$nomDep=$_POST['nomDep'];
			

echo $id_departamento ;

include("../conect.php");




$sql= "UPDATE departamento SET id_departamento = $id_departamento , nomDep = '$nomDep' WHERE id_departamento=$id_departamento";

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