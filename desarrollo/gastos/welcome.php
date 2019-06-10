		<?php

			
			$departamento_id_departamento=$_POST['id_deparatamento'];
			$solicita=$_POST['solicita'];
			$requiere=$_POST['requiere'];
			$unidadMedida=$_POST['unidadMedida'];
			$concepto=$_POST['concepto'];


			$idRubro=$_POST['municipio1'];
			$cantidad=$_POST['cantidad1'];
			$precioUnitario=$_POST['precioUnitario1'];
			$iva=0;
			if (isset($_POST['iva1'])){
				$iva=1;
			}

			include("../conect.php");

				$sql = "INSERT INTO `gastos` (`departamento_id_departamento`, `concepto`, `fecha`, `solicita`, `requiere`, `unidadMedida`, `status`) VALUES ('$departamento_id_departamento', '$concepto', NOW(), '$solicita', '$requiere',  '$unidadMedida', '0')";

			if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			    $id = $conn->insert_id;
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}


			$sql = "INSERT INTO `conceptosgastos` (`idGasto`, `idRubro`, `cantidad`, `precio`, `iva`) VALUES ('$id', '$idRubro', '$cantidad', '$precioUnitario', '$iva')";

			if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			    
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
			

			if (isset($_POST['municipio2']))
			{
				$idRubro=$_POST['municipio2'];
			$cantidad=$_POST['cantidad2'];
			$precioUnitario=$_POST['precioUnitario2'];
			$iva=0;
			if (isset($_POST['iva2'])){
				$iva=1;
			}

			$sql = "INSERT INTO `conceptosgastos` (`idGasto`, `idRubro`, `cantidad`, `precio`, `iva`) VALUES ('$id', '$idRubro', '$cantidad', '$precioUnitario', '$iva')";

			if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			    
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
			}

			if (isset($_POST['municipio3']))
			{
				$idRubro=$_POST['municipio3'];
			$cantidad=$_POST['cantidad3'];
			$precioUnitario=$_POST['precioUnitario3'];
			$iva=0;
			if (isset($_POST['iva3'])){
				$iva=1;
			}

			$sql = "INSERT INTO `conceptosgastos` (`idGasto`, `idRubro`, `cantidad`, `precio`, `iva`) VALUES ('$id', '$idRubro', '$cantidad', '$precioUnitario', '$iva')";

			if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			    
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
			}
			
			if (isset($_POST['municipio4']))
			{
				$idRubro=$_POST['municipio4'];
			$cantidad=$_POST['cantidad4'];
			$precioUnitario=$_POST['precioUnitario4'];
			$iva=0;
			if (isset($_POST['iva4'])){
				$iva=1;
			}

			$sql = "INSERT INTO `conceptosgastos` (`idGasto`, `idRubro`, `cantidad`, `precio`, `iva`) VALUES ('$id', '$idRubro', '$cantidad', '$precioUnitario', '$iva')";

			if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			    
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
			}

			if (isset($_POST['municipio5']))
			{
				$idRubro=$_POST['municipio5'];
			$cantidad=$_POST['cantidad5'];
			$precioUnitario=$_POST['precioUnitario5'];
			$iva=0;
			if (isset($_POST['iva5'])){
				$iva=1;
			}

			$sql = "INSERT INTO `conceptosgastos` (`idGasto`, `idRubro`, `cantidad`, `precio`, `iva`) VALUES ('$id', '$idRubro', '$cantidad', '$precioUnitario', '$iva')";

			if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			    
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
			}

			if (isset($_POST['municipio6']))
			{
				$idRubro=$_POST['municipio6'];
			$cantidad=$_POST['cantidad6'];
			$precioUnitario=$_POST['precioUnitario6'];
			$iva=0;
			if (isset($_POST['iva6'])){
				$iva=1;
			}

			$sql = "INSERT INTO `conceptosgastos` (`idGasto`, `idRubro`, `cantidad`, `precio`, `iva`) VALUES ('$id', '$idRubro', '$cantidad', '$precioUnitario', '$iva')";

			if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			    
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
			}

			if (isset($_POST['municipio7']))
			{
				$idRubro=$_POST['municipio7'];
			$cantidad=$_POST['cantidad7'];
			$precioUnitario=$_POST['precioUnitario7'];
			$iva=0;
			if (isset($_POST['iva7'])){
				$iva=1;
			}

			$sql = "INSERT INTO `conceptosgastos` (`idGasto`, `idRubro`, `cantidad`, `precio`, `iva`) VALUES ('$id', '$idRubro', '$cantidad', '$precioUnitario', '$iva')";

			if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			    
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
			}

			if (isset($_POST['municipio8']))
			{
				$idRubro=$_POST['municipio8'];
			$cantidad=$_POST['cantidad8'];
			$precioUnitario=$_POST['precioUnitario8'];
			$iva=0;
			if (isset($_POST['iva8'])){
				$iva=1;
			}

			$sql = "INSERT INTO `conceptosgastos` (`idGasto`, `idRubro`, `cantidad`, `precio`, `iva`) VALUES ('$id', '$idRubro', '$cantidad', '$precioUnitario', '$iva')";

			if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			    
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
			}

			if (isset($_POST['municipio9']))
			{
				$idRubro=$_POST['municipio9'];
			$cantidad=$_POST['cantidad9'];
			$precioUnitario=$_POST['precioUnitario9'];
			$iva=0;
			if (isset($_POST['iva9'])){
				$iva=1;
			}

			$sql = "INSERT INTO `conceptosgastos` (`idGasto`, `idRubro`, `cantidad`, `precio`, `iva`) VALUES ('$id', '$idRubro', '$cantidad', '$precioUnitario', '$iva')";

			if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			    
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
			}

			if (isset($_POST['municipio10']))
			{
				$idRubro=$_POST['municipio10'];
			$cantidad=$_POST['cantidad10'];
			$precioUnitario=$_POST['precioUnitario10'];
			$iva=0;
			if (isset($_POST['iva10'])){
				$iva=1;
			}

			$sql = "INSERT INTO `conceptosgastos` (`idGasto`, `idRubro`, `cantidad`, `precio`, `iva`) VALUES ('$id', '$idRubro', '$cantidad', '$precioUnitario', '$iva')";

			if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			    
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
			}

			


			


			
			

/*
			
*/
			$conn->close();

		header("location:ticketordencompra.php?id=$id");
			?>



			<form action="menu.php">
			<input type="submit" name="submit" value="Regresar"/>
			</form>
       