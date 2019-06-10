<?php

$id_producto=$_POST['id_producto'];


include("../conect.php");



// sql to delete a record
$sql = "DELETE FROM producto WHERE id_producto=$id_producto";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
header("location:menu.php");
?> 
<form action="menu.php">
<input type="submit" name="submit" value="Regresar"/>
</form>