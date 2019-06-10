<?php
			$id=$_POST['id'];
			include ("../conect.php");
			

$sql= "UPDATE `listaventa` SET `totalCobrar` = '0', `status` = '1' WHERE `listaventa`.`idListaVenta` = $id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}


$conn->close();
header("location:ticketventa.php?id=$id");
?> 
<form action="menuventa.php">
<input type="submit" name="submit" value="Regresar"/>
</form>