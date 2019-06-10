		<?php

			
			$familia=$_POST['idFamilia'];
			$nombre_producto=$_POST['nombre_producto'];
			$descripcion=$_POST['descripcion'];
			$precio_venta=$_POST['precio_venta'];
			$precio_compra=$_POST['precio_compra'];
			$unidadMed=$_POST['unidadMed'];
			$dpto=$_POST['dpto'];

			
			include("../conect.php");


			$sql = "INSERT INTO `producto` ( `familia`, `nombre_producto`, `descripcion`, `precio_venta`, `precio_compra`, `unidadMed`, `dpto`) VALUES ( '$familia', '$nombre_producto', '$descripcion', '$precio_venta', '$precio_compra', '$unidadMed', '$dpto');";

			if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();

			header("location:menu.php");
			?>



			<form action="menu.php">
			<input type="submit" name="submit" value="Regresar"/>
			</form>
       