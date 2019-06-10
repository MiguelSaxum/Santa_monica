		<?php

			$nivSeg=$_POST['idnivelSeguridad'];
			$nomUs=$_POST['nomUs'];
			$apellidoUs=$_POST['apellidoUs'];
			$fechaIng=$_POST['fechaIng'];
			$fechaNac=$_POST['fechaNac'];
			$email=$_POST['email'];
			$passUs=$_POST['passUs'];


			
			include("../conect.php");


			$sql = "INSERT INTO `usuarios` (`idUsuarios`, `nivelSeguridad_idnivelSeguridad`, `nomUs`, `apellidoUs`, `fechaIng`, `fechaNac`, `email`, `passUs`) VALUES (NULL, '$nivSeg', '$nomUs', '$apellidoUs', '$fechaIng', '$fechaNac', '$email', '$passUs');";

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
       