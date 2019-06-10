		<?php

			
			$nombre=$_POST['nombre'];
			$direccion=$_POST['direccion'];
			$telefono=$_POST['telefono'];
			
			$rfc=$_POST['rfc'];
			$plazoCred=$_POST['plazoCred'];
			$ciudad=$_POST['ciudad'];
			$estado=$_POST['estado'];

			
			include("../conect.php");


			$sql = "INSERT INTO `cliente`(`id_clientes`, `nombre`, `direccion`, `telefono`, `rfc`, `plazoCred`, `ciudad` , `estado`) VALUES ( NULL, '$nombre', '$direccion', '$telefono', '$rfc', '$plazoCred', '$ciudad' , '$estado');";

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
       