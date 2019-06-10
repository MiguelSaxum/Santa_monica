<?php

			$id_producto=$_POST['id'];
			$familia=$_POST['idFamilia'];
			$nombre_producto=$_POST['nombre_producto'];
			$descripcion=$_POST['descripcion'];
			$precio_venta=$_POST['precio_venta'];
			$precio_compra=$_POST['precio_compra'];
			$unidadMed=$_POST['unidadMed'];

echo $id_producto ;

include("../conect.php");




$sql= "UPDATE producto SET id_producto = $id_producto , familia = '$familia' , nombre_producto = '$nombre_producto' , descripcion =  '$descripcion' , precio_venta = $precio_venta , precio_compra= $precio_compra , unidadMed= '$unidadMed'  WHERE id_producto=$id_producto";

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
</form>