<?php
			$id=$_POST['id'];
			


include ("../conect.php");

$sql= "UPDATE `listaventa` SET `status` = '2' WHERE `listaventa`.`idListaVenta` = $id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}


$conn->close();
header("location:menufproceso.php");
?> 
<form action="menufactura.php">
<input type="submit" name="submit" value="Regresar"/>
</form>