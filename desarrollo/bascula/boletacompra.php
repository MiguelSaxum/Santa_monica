<head>
  <script>
function myFunction() {
    window.print();
    window.history.back();
}
</script>
<style>
.cuadrado{
padding:5px;
margin:5px;
border: solid 1px black;
color: black;
width: 
height: relative;
text-align: center;
border-radius: 5px 5px 5px 5px;
-moz-border-radius: 5px 5px 5px 5px;
-webkit-border-radius: 5px 5px 5px 5px;

}
table {
    
    border-collapse: collapse;
    width: 100%;
    text-align: center;;
}

td, th {
    border: 0px solid #dddddd;
    text-align: left;
    padding: 2px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}


#contenedor {height: 200px;margin:0;}
#col_der, #col_izq, #col_cen {height: 100%;}
#col_der {float: right; width: 520px;}
#col_izq {float: left; width: 200px;}
#col_cen {background-color: #ccc;}

</style>
<?php $id=$_GET['id'];
include("../conect.php");
$sql = "SELECT * FROM listacompra inner join proveedor on idProveedor = id_proveedor  inner join producto on idProducto = id_producto inner join familia on familia=idFamilia where idListaCompra = $id";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) { ?>

<div><p><img  style="float:left; margin:10px;" src="../opesa.jpg"> <h3 style="float: right">BOLETA DE COMPRA: <?php echo $row['idListaCompra'];?><br>
		FECHA: <?php echo date("Y-m-d")?></h3></p></div>

</head>
<body onload="myFunction()">









<div id="contenedor">
<div id="col_der">
	


</div>
<div id="col_izq">
	<div class="cuadrado" style="margin-top: 0px,0px;margin-right: 0px;width: 400px">


<table  style="margin-bottom: 0px;">
	<th style="text-align: center;border:solid;"  colspan="4">Datos Del Proveedor </th>
	<TR>
		<TD colspan="2"><p ><b >RFC:</b></td><td colspan="2" ><?php echo $row['rfc'];?></td>
</p></TR>
	<TR>
		<TD colspan="2"><p ><b >NOMBRE:</b></td><td colspan="2"><?php echo $row['nombre'];?></td>
</p></TR>
	<TR>
		<TD colspan="2"><p ><b >CHOFER:</b></td><td colspan="2"><?php echo $row['chofer'];?></td>
</p></TR>
<TR>
		<TD><p ><b >UNIDAD:</b></td><td><?php echo $row['idUnidad'];?></td><TD><p ><b >PLACAS:</b></td><td><?php echo $row['placas'];?></td>
</p></TR>
<TR>
		<TD colspan="2"><p ><b >CONTENEDOR:</b></td><td colspan="2"><?php echo $row['contenedor'];?></td>
</p></TR>
<TR>
		<TD colspan="2"><p ><b >PESO DE ENTRADA:</b></td><td colspan="2"><?php echo $row['gross'];?></td>
</p></TR>
<TR>
		<TD colspan="2"><p ><b >COND. PAGO:</b></td><td colspan="2"><?php echo $row['metodo'];?></td>
</p></TR>
<TR>
		<TD><p ><b >MANIFIESTO:</b></td><td><?php echo $row['manifiesto'];?></td><TD><p ><b >FECHA:</b></td><td><?php echo $row['fechaEntrada'];?></td>
</p></TR>
<TR>
		<TD colspan="2"><p ><b >MATERIAL:</b></td><td colspan="2"><?php echo $row['nombre_producto'];?></td>
</p></TR>
<tr><td>&nbsp;</td></tr>
<TR>
		<TD colspan="4"><p ><b >________________________________________________</b></td>
</p></TR>
<TR>
		<TD colspan="4" style="text-align: center; font-size: 12"><p >FIRMA DEL CHOFER</td>
</p></TR>
</TABLE>

</div>
</div>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<div id="contenedor">
<div id="col_der">
	


</div>
<div id="col_izq">
	<div class="cuadrado" style="margin-top: 0px,0px;margin-right: 0px;width: 400px">


<table  style="margin-bottom: 0px;">
	<th style="text-align: center;border:solid;"  colspan="4">Informacion de Salida </th>
	<TR>
		<TD><p ><b >FOLIO:</b></td><td><?php echo $row['idListaCompra'];?></td><TD><p ><b >FECHA DE SALIDA:</b></td><td><?php echo $row['fechaSalida'];?></td>
</p></TR>
	<TR>
		<TD colspan="2"><p ><b >MANIFIESTO:</b></td><td colspan="2"><?php echo $row['manifiesto'];?></td>
</p></TR>
	<TR>
		<TD colspan="2"><p ><b >FECHA MANIFIESTO:</b></td><td colspan="2"><?php echo $row['fechaEntrada'];?></td>
</p></TR>
<TR>
		<TD colspan="2"><p ><b >MATERIAL:</b></td><td colspan="2"><?php echo $row['nomFam']." - ".$row['nombre_producto'];?></td>
</p></TR>
<TR>
		<TD><p ><b >CANTIDAD:</b></td><td><?php echo $row['neto'];?></td><TD><p ><b >U.M.</b></td><td><?php echo $row['unidadMed'];?></td>
</p></TR>
<TR>
		<TD colspan="2"><p ><b >DESCRIPCION:</b></td><td colspan="2"><?php echo $row['nombre_producto'];?></td>
</p></TR>
<TR>
		<TD colspan="2"><p ><b >PRECIO:</b></td><td colspan="2"><?php echo $row['precio_compra'];?></td>
</p></TR>

<TR>
		<TD><p ><b >GROSS:</b></td><td><?php echo $row['gross'];?></td><TD><p ><b >TARE:</b></td><td><?php echo $row['tare'];?></td>
</p></TR>
<TR>
		<TD colspan="2"><p ><b >NETO:</b></td><td colspan="2"><?php echo $row['neto'];?></td>
</p></TR>
<TR>
		<TD colspan="4"><p ><b >________________________________________________</b></td>
</p></TR>
<TR>
		<TD colspan="2"><B>TOTAL A PAGAR ANTES DE IVA</B></td><td colspan="2" style="text-align: right;">$ <?php echo $row['totalPagar'];?></td>
</p></TR>
<TR>
		<TD colspan="4"><p ><b >________________________________________________</b></td>
</p></TR>
<TR>
		<TD colspan="4" style="text-align: justify; font-size: 8"><p >DEBO(EMOS) Y PAGARE(MOS) INCONDICIONALMENTE A LA ORDEN DE PRODUCTOS Y SERVICIOS INDUSTRIALES SANTA MONICA SA DE CV
		LA CANTIDAD DE _____________________________________ EN LA CIUDAD DE SALTILLO, COAH. EL DIA ____ DE _______________ DEL _______ IMPORTE DE MERCANCIAS RECIBIDAS A MI (NUESTRA) ENTERA SATISFACCION. EN CASO DE NO PAGARSE LA CANTIDAD QUE ESTE DOCUMENTO EXPRESA EN LA FECHA SEÑALADA CAUSARA INTERESES MORATORIOS A RAZON DEL ______% MENSUAL SIN QUE POR ESTO SE ENTIENDA PRORROGADO EL PLAZO DE SU VENCIMIENTO<BR><BR>
	SALTILLO, COAH. A ______ DE ______________ DEL _______                               ACEPTO(AMOS)__________________________</td>
</p></TR>

</TABLE>

</div>
</div>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<table width="100%" style="text-align: center">
	<tr>
		<td>______________________</td><td>______________________</td><td>______________________</td>
	</tr>
<tr>
		<td>Nombre y firma del chofer</td><td>Nombre y firma Bascula</td><td>Nombre y firma Supervisor</td>
	</tr>












</body>
<?php
}
?>