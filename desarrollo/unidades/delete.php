<?php

$id_unidades=$_POST['id_unidades'];


include("../conect.php");



// sql to delete a record
$sql = "DELETE FROM unidades WHERE id_unidades=$id_unidades";

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