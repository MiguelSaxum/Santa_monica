<?php
			$id=$_POST['id'];
			
if (isset($_POST['check']))
{
	$check=$_POST['check'];
}
include("../conect.php");



if (isset($_POST['check']))
{
$sql= "UPDATE `listaventa` SET `iva` = '1', `status` = '1' WHERE `listaventa`.`idListaVenta` = $id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

}
else
{
	$sql= "UPDATE `listaventa` SET `status` = '1' WHERE `listaventa`.`idListaventa` = $id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
}
$conn->close();
header("location:ticketventa.php?id=$id");
?> 
<form action="menuventa.php">
<input type="submit" name="submit" value="Regresar"/>
</form>