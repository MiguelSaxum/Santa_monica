		<?php

			
			$descripcion=$_POST['descripcion'];
			$idDep=$_POST['id_departamento'];
			


			
			include("../conect.php");


			$sql = "INSERT INTO `rubro`(`idRubro`, `descripcion`, `idDep`) VALUES ( NULL, '$descripcion', '$idDep');";

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
       