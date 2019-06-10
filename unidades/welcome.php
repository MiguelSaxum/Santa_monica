		<?php

			$chofer=$_POST['chofer'];
			$unidad=$_POST['unidad'];
			$placa=$_POST['placa'];
			$marca=$_POST['marca'];
			$descripcion=$_POST['descripcion'];


			
			include("../conect.php");


			$sql = "INSERT INTO `unidades`(`id_unidades`,`chofer`, `unidad`, `placa`, `marca`, `descripcion`) VALUES ( NULL,'$chofer', '$unidad', '$placa', '$marca', '$descripcion');";

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
       