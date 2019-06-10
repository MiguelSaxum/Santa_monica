<?php
			$id_unidades=$_POST['id_unidades'];
			$chofer=$_POST['chofer'];
			$unidad=$_POST['unidad'];
			$placa=$_POST['placa'];
			$marca=$_POST['marca'];
			$descripcion=$_POST['descripcion'];

echo $id_unidades ;

include("../conect.php");




$sql= "UPDATE unidades SET id_unidades = $id_unidades ,chofer='$chofer', unidad = $unidad , placa = '$placa' , marca =  '$marca' , descripcion = '$descripcion' WHERE id_unidades=$id_unidades";

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