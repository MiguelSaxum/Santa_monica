		<?php

			
			
			$quien=$_POST['quien'];
			$porque=$_POST['porque'];
			$cuanto=$_POST['cuanto'];
			
			
			
			
			
			


			
			include("../conect.php");


			$sql = "INSERT INTO `ingresos` (`quien`, `cuando`, `porque`, `cuanto`) VALUES ('$quien', NOW(), '$porque', '$cuanto')";

			if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			    $id = $conn->insert_id;
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();

			header("location:ticketordeningreso.php?id=$id");
			?>



			<form action="menu.php">
			<input type="submit" name="submit" value="Regresar"/>
			</form>
       