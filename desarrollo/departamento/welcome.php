		<?php

			
			$nomDep=$_POST['nomDep'];
			

			
			include("../conect.php");


			$sql = "INSERT INTO `departamento`(`id_departamento`, `nomDep`) VALUES ( NULL, '$nomDep');";

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
       