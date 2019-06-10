<?php
			$idFamilia=$_POST['id'];
			$nomFam=$_POST['nomFam'];
			$descFam=$_POST['descFam'];
			



include("../conect.php");




$sql= "UPDATE familia SET idFamilia = $idFamilia ,  nomFam = '$nomFam' , descFam =  '$descFam' WHERE idFamilia=$idFamilia";

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