		<?php

			
			$nombre=$_POST['nombre'];
			$direccion=$_POST['direccion'];
			$telefono=$_POST['telefono'];
			
			$rfc=$_POST['rfc'];
			$contacto=$_POST['contacto'];
			$plazoCred=$_POST['plazoCred'];
			$estado=$_POST['estado'];

			
			include("../conect.php");


			$sql = "INSERT INTO `proveedor`(`id_proveedor`, `nombre`, `direccion`, `telefono`, `rfc`, `contacto`, `plazoCred`, `estado`) VALUES ( NULL, '$nombre', '$direccion', '$telefono', '$rfc', '$contacto', '$plazoCred', '$estado');";

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
       