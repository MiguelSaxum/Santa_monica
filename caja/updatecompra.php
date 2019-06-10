<?php
			$id=$_POST['id'];
			
if (isset($_POST['check']))
{
	$check=$_POST['check'];
}
include("../conect.php");



if (isset($_POST['check']))
{
$sql= "UPDATE `listacompra` SET `iva` = '1', `status` = '1' WHERE `listacompra`.`idListaCompra` = $id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

}
else
{
	$sql= "UPDATE `listacompra` SET `status` = '1' WHERE `listacompra`.`idListaCompra` = $id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
}
$conn->close();
header("location:ticketcompra.php?id=$id");
?> 
<form action="menucompra.php">
<input type="submit" name="submit" value="Regresar"/>
</form>