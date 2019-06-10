<?php
			$id=$_POST['id'];
			
			



include("../conect.php");




$sql= "UPDATE `ingresos` SET `status` = '1' WHERE `ingresos`.`idIngresos` = $id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
header("location:menuoventa.php");
?> 
<form action="menuoventa.php">
<input type="submit" name="submit" value="Regresar"/>
</form>0