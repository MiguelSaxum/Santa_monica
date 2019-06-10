<html>
  <script>
function myFunction() {
    window.print();
    window.history.back();
}
</script>
<?php $id=$_GET['id'];
include("../conect.php");
$sql = "SELECT *, unidadmedida.descripcion as um FROM gastos inner join conceptosgastos on id_gastos=idGasto inner join rubro on conceptosgastos.idRubro = rubro.idRubro inner join unidadmedida on unidadMedida = idUnidadMedida inner join departamento on departamento_id_departamento = id_departamento where id_gastos = $id GROUP by id_gastos";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) { ?>
	<head>
		<title> Orden de compra</title>
		<div><p><img  style="float:left; margin:10px;" src="../opesa.jpg"> <h3 style="float: right">Orden de Compra: ODC-<?php echo $id;?><br>
		Fecha de solicitud: <?php echo $row['fecha'];?></h3></p><div>
	</head>

	<body onload="myFunction()">
		<div>
		<table border="0" width="100%" >
			<tr>
				<td colspan="2"><b>Departamento:</b> <?php echo $row['nomDep'];?></td>
			</tr>
			<tr>
				<td colspan="2"><b>Solicita:</b> <?php echo $row['solicita'];?></td>
				<td colspan="2"><b>Se solicita para:</b> <?php echo $row['requiere'];?></td>
			</tr>
			<tr>
				<td height="1" colspan="8" style="border-bottom:2px solid black"></td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
			<tr>
				<td><b>Tipo de Gasto</b></td>
				<td><b>Cantidad</b></td>
				<td><b>Unidad de <br>Medida</b></td>
				<td><b>Descripcion</b></td>
				<td><b>Precio <br>Unitario</b></td>
				<td><b>Subtotal</b></td>
				<td><b>IVA</b></td>
				<td><b>Total</b></td>
				</tr>
			<tr>
				<td height="1" colspan="8" style="border-bottom:2px solid black"></td>
			</tr>
			<?php
			$sub=0;
			$tiva=0;
			$gtotal=0;
			$sql2 = "SELECT * FROM `conceptosgastos` inner join rubro on rubro.idRubro = conceptosgastos.idRubro  WHERE `idGasto` = $id";
				$result2 = $conn->query($sql2);
				while($row2 = $result2->fetch_assoc()) { 
		    $iva=0;
		    $total=($row2["precio"]*$row2["cantidad"]);
		        if ($row2['iva']==1)
		        {
		          $iva+=($total*0.16);
		          $total*=1.16;
		        }
		        ?>
			<tr>
				<td><?php echo $row2['descripcion'];?></td>
				<td><?php echo $row2['cantidad'];?></td>
				<td><?php echo $row['um'];?></td>
				<td><?php echo $row['concepto'];?></td>
				<td>$<?php echo $row2['precio'];?></td>
				<td>$<?php echo $row2["precio"]*$row2["cantidad"]; $sub+=$row2["precio"]*$row2["cantidad"];?></td>
				<td>$<?php echo $iva; $tiva+=$iva;?></td>
				<td>$<?php echo $total; $gtotal+=$total;?></td>
				</tr>
				<?php } ?>
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
				<td>$<?php echo $sub;?></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><b>IVA</b></td>
				<td>$<?php echo $tiva;?></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><b>TOTAL</b></td>
				<td>$<?php echo $gtotal;?></td>
			</tr>
			<tr>
				<td height="1" colspan="8" style="border-bottom:2px solid black"></td>
			</tr>
			<tr>
				<td><b>Solicita:</b></td>
				<td><?php echo $row['solicita'];?></td>
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