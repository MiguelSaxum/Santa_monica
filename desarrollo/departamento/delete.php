<?php

$id_departamento=$_POST['id_departamento'];


include("../conect.php");



// sql to delete a record
$sql = "DELETE FROM departamento WHERE id_departamento=$id_departamento";

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