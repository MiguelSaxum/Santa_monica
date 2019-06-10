<?php
			$id=$_POST['id'];
			
			



include("../conect.php");




$sql= "UPDATE `gastos` SET `status` = '2' WHERE `gastos`.`id_gastos` = $id";

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