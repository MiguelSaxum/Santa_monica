<?php
	
	require ('../conect.php');
	
	$idFamilia = $_POST['idFamilia'];
	
	$queryM = "SELECT * FROM producto WHERE familia = '$idFamilia' ";
	$resultadoM = $mysqli->query($queryM);
	
	$html= "<option value='0'>Seleciona Producto</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['id_producto']."'>".$rowM['nombre_producto']." - ".$rowM['descripcion']."</option>";
	}
	
	echo $html;
?>		