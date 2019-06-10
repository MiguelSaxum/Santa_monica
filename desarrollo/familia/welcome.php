		<?php

			
			$nomFam=$_POST['nomFam'];
			$descFam=$_POST['descFam'];
			


			
			include("../conect.php");


			$sql = "INSERT INTO `familia`(`idFamilia`, `nomFam`, `descFam`) VALUES ( NULL, '$nomFam', '$descFam');";

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
       