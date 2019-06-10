		<?php

			$numEmpleado=$_POST['numEmpleado'];
			$nomEmpleado=$_POST['nomEmpleado'];
			$apellidoPat=$_POST['apellidoPat'];
			$apellidoMat=$_POST['apellidoMat'];
			$departamento=$_POST['id_departamento'];
			$direccion=$_POST['direccion'];
			$telefono=$_POST['telefono'];
			$email=$_POST['email'];


			
			include("../conect.php");


			$sql = "INSERT INTO `empleado`(`idEmpleado`, `numEmpleado`, `nomEmpleado`, `apellidoPat`, `apellidoMat`, `departamento`, `direccion`, `telefono`, `email`)VALUES (NULL, '$numEmpleado', '$nomEmpleado', '$apellidoPat', '$apellidoMat','$departamento', '$direccion', '$telefono', '$email');";

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
       