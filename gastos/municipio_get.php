<?php
	include("../conect.php");
	$id_departamento=intval($_REQUEST['id_deparatamento']);
	$municipios = $conn->prepare("SELECT * FROM rubro WHERE idDep = '$id_departamento'") or die(mysqli_error());
		echo '<option value = "">Selecciona un Tipo de Gasto </option>' ;
	if($municipios->execute()){
		$a_result = $municipios->get_result();
	}
		while($row = $a_result->fetch_array()){
			echo '<option value = "'.$row['idRubro'].'">'.utf8_encode( $row['descripcion']).'</option>';
		}
?>