<?php
	require ('conect.php');
	
	$id_producto= $_POST['cbx_municipio'];
	$id_Familia = $_POST['cbx_estado'];
	$Proveedor = $_POST['Proveedor'];	
	$unidades = $_POST['unidades'];
	$chofer = $_POST['chofer'];
	$contenedor = $_POST['contenedor'];
	$placas = $_POST['placas'];
	$Manifiesto = $_POST['Manifiesto'];
	$gross = $_POST['gross'];
	$Tare = $_POST['Tare'];
	$Fechae = $_POST['Fechae'];
	$Fechas = $_POST['Fechas'];
	$metodo = $_POST['metodo'];
	$iva=0;
	if (isset($_POST['iva']))
	{
		$iva=1;
	}

	$neto = $gross-$Tare;

			$query = "SELECT * FROM producto where id_producto = $id_producto";
			$resultado=$mysqli->query($query);
			while($row = $resultado->fetch_assoc()) {
				$precio=$row['precio_compra'];
			}

			$total=$precio*$neto;
			echo $total." ........";


			if (isset($_POST['merma']) && $_POST['merma'] != null)
			{
				$merma=$_POST['merma']/100;
				$merma*=$total;
				$total-=$merma;
			}

			if (isset($_POST['descuento']) && $_POST['descuento'] != null)
			{
				$total=$_POST['descuento'];
			}
			
			$sql = "INSERT INTO `listacompra` (`idProveedor`, `idUnidad`, `idProducto`, `contenedor`, `chofer`, `placas`, `manifiesto`, `fechaEntrada`, `fechaSalida`, `gross`, `tare`, `neto`, `totalPagar`, `iva`, `metodo`, `status`) VALUES ('$Proveedor', '$unidades', '$id_producto', '$contenedor', '$chofer', '$placas', '$Manifiesto', '$Fechae', '$Fechas', '$gross', '$Tare', '$neto', '$total', '$iva', '$metodo', '0')";

			if ($mysqli->query($sql) === TRUE) {
			    echo "New record created successfully";
			    $id = $mysqli->insert_id;
			} else {
			    echo "Error: " . $sql . "<br>" . $mysqli->error;
			}

			$mysqli->close();



header("location:boletacompra.php?id=".$id);



echo $id_producto." ........";
echo $id_Familia." ........";
echo $Proveedor." ........";
echo $unidades." ........";
echo $contenedor." ........";
echo $contenedor." ........";
echo $Manifiesto." ........";
echo $gross." ........";
echo $Tare." ........";
echo $Fechae." ........";
echo $Fechas." ........";
echo $total." ........";

?>