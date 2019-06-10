<?php
			$id=$_POST['id'];
			$iva=$_POST['iva'];
			$fechaEx=$_POST['fechaEx'];


include ("../conect.php");

$sql= "UPDATE `listaventa` SET `iva` = '$iva', `status` = '1', `fechaEx` = '$fechaEx' WHERE `listaventa`.`idListaVenta` = $id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}


$conn->close();
header("location:menufactura.php");
?> 
<form action="menufactura.php">
<input type="submit" name="submit" value="Regresar"/>
</form>