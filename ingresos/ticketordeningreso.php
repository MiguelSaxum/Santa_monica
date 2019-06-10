<html>
  <script>
function myFunction() {
    window.print();
    window.history.back();
}
</script>
<?php $id=$_GET['id'];
include("../conect.php");
$sql = "SELECT * from ingresos where idIngresos = $id";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) { ?>
	<head>
		<title> Orden de Ingreso</title>
		<div><p><img  style="float:left; margin:10px;" src="../opesa.jpg"> <h3 style="float: right">Orden de Ingreso: ODI-<?php echo $id;?><br>
		Fecha de solicitud: <?php echo $row['cuando'];?></h3></p><div>
	</head>

	<body onload="myFunction()">
		<div>
		<table border="0" width="100%" >
			
			<tr>
				<td colspan="2"><b>Ingresa:</b> <?php echo $row['quien'];?></td>
				
			</tr>
			<tr>
				<td height="1" colspan="8" style="border-bottom:2px solid black"></td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
			<tr>
				<td><b></b></td>
				<td><b></b></td>
				<td><b></b></td>
				<td><b></b></td>
				<td><b></b></td>
				<td><b>Concepto</b></td>
				<td><b></b></td>
				
				<td><b>Total</b></td>
				</tr>
			<tr>
				<td height="1" colspan="8" style="border-bottom:2px solid black"></td>
			</tr>
			
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><?php echo $row['porque'];?></td>
				<td></td>
				<td>$<?php echo $row["cuanto"];?></td>
				
				</tr>
			<tr>
				<td height="1" colspan="8" style="border-bottom:2px solid black"></td>
			</tr>
			<tr>
				
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><b>SUBTOTAL</b></td>
				<td>$<?php echo $row["cuanto"];?></td>
			</tr>
			<tr>
				
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><b>IVA</b></td>
				<td>$0</td>
			</tr>
			<tr>
				
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><b>TOTAL</b></td>
				<td>$<?php echo $row["cuanto"];?></td>
			</tr>
			<tr>
				<td height="1" colspan="8" style="border-bottom:2px solid black"></td>
			</tr>
			<tr>
				<td><b>Ingresa:</b></td>
				<td><?php echo $row['quien'];?></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><b>Recibe:</b></td>
				<td></td>
			</tr>
		</table>
	</div>
	<?php
}
?>
	</body>
</html>