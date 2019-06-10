
<?php
	require ('conect.php');
	
	$query = "SELECT * FROM familia ";
	$resultado=$mysqli->query($query);
?>


<!DOCTYPE html>
<html>
<head>
	<head>
		<title>BASCULA</title>
		
		<script language="javascript" src="js/jquery-3.1.1.min.js"></script>
		
		<script language="javascript">
			$(document).ready(function(){
				$("#cbx_estado").change(function () {

					$('#cbx_localidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
					
					$("#cbx_estado option:selected").each(function () {
						idFamilia = $(this).val();
						$.post("includes/getMunicipio.php", { idFamilia: idFamilia }, function(data){
							$("#cbx_municipio").html(data);
						});            
					});
				})
			});
			
			$(document).ready(function(){
				$("#cbx_municipio").change(function () {
					$("#cbx_municipio option:selected").each(function () {
						id_municipio = $(this).val();
						$.post("includes/getLocalidad.php", { id_municipio: id_municipio }, function(data){
							$("#cbx_localidad").html(data);
						});            
					});
				})
			});
		</script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="../css/templatemo_main.css">
  <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<style>

    .pie-pagina {
margin: 0 auto;
padding: 0 8px;
background: #878787;
width: 984px;
overflow: hidden;
}   
/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons that are used to open the tab content */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
    animation: fadeEffect 1s; /* Fading effect takes 1 second */
}

/* Go from zero to full opacity */
@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}
</style>
<script type="text/javascript">function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}</script>
<!-- 
Dashboard Template 
http://www.templatemo.com/preview/templatemo_415_dashboard
-->
</head>
<body>
  <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1>OPESA - Admin </h1></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
      </div>   
    </div>
    <div class="template-page-wrapper">
      <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-users"></i> Gerencia <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="../usuarios/menu.php">Usuarios</a></li>
              <li><a href="../departamento/menu.php">Departamento</a></li>
                <li><a href="../rubro/menu.php">Tipos de Gasto</a></li>
              
              
            </ul>
          </li>

          

          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-cubes"></i> Materiales <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="../bascula/datos.php?id=1">Compras</a></li>
              <li><a href="../bascula/datosventa.php?id=1">Ventas</a></li>
              
              <li><a href="../cliente/menu.php?id=1">Clientes</a></li>
              <li><a href="../proveedor/menu.php?id=1">Proveedores</a></li>             
              <li><a href="../familia/menu.php?id=1">Familia</a></li>
              <li><a href="../producto/menu.php?id=1">Productos</a></li>
              
              
            </ul>
          </li>
          
          
          
          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-dollar"></i> Facturacion <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="../caja/menufactura.php">Facturas</a></li>
              <li><a href="../caja/menufproceso.php">Facturas en Proceso</a></li>
              <li><a href="../caja/menufpagadas.php">Facturas Pagadas</a></li>
              <li><a href="../caja/menufexpiradas.php">Facturas Expiradas</a></li>
              <li><a href="../reportes/menucompra.php">Compras</a></li>
            <li><a href="../reportes/menuventa.php">Ventas</a></li>
            <li><a href="../reportes/menuocompra.php">Ordenes de Compra</a></li>
            <li><a href="../reportes/menuoventa.php">Ordenes de Ingreso</a></li>
            </ul>
          </li>
           
          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-edit"></i> Contabilidad <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="../gastos/menu.php?id=2"></i>Ordenes de Compra</a></li>
           <li><a href="../ingresos/menu.php?id=2"></i>Ingresos</a></li>
            <li><a href="../caja/menucompra.php?id=2">Compras</a></li>
            <li><a href="../caja/menuventa.php?id=2">Ventas</a></li>
            <li><a href="../caja/menufactura.php">Facturas</a></li>
            <li><a href="../caja/menuocompra.php?id=2">Ordenes de Compra</a></li>
            <li><a href="../caja/menuoventa.php?id=2">Ordenes de Ingreso</a></li>
            <li><a href="../cliente/menu.php?id=2">Clientes</a></li>
              <li><a href="../proveedor/menu.php?id=2">Proveedores</a></li>             
              <li><a href="../familia/menu.php?id=2">Familia</a></li>
              <li><a href="../producto/menu.php?id=2">Productos</a></li>
              
            </ul>
          </li>
          
          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-tint"></i> Productos Quimicos <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
            <li><a href="../bascula/datos.php?id=3">Compras</a></li>
              <li><a href="../bascula/datosventa.php?id=3">Ventas</a></li>
              
              <li><a href="../cliente/menu.php?id=3">Clientes</a></li>
              <li><a href="../proveedor/menu.php?id=3">Proveedores</a></li>             
              <li><a href="../familia/menu.php?id=3">Familia</a></li>
              <li><a href="../producto/menu.php?id=3">Productos</a></li>
            </ul>
          </li>
          
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Cerrar Sesión</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">

          <p style="text-align: center;"><img src="../opesa.jpg"><br></p>
          
<div class="templatemo-charts">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                






		
	






<h2 style="text-align: center;">Bascula Ventas</h2>




<div style="margin: 70px;border: 1px solid #4CAF50">


<table>

		<form id="combo" name="combo" action="guardaventa.php" method="POST">
			<tr>
			<td>
				<div>Selecciona Familia :
			</td>
			<td>
				<select name="cbx_estado" id="cbx_estado"  required >
				<option value="0">Seleccionar Familia</option>
				<?php while($row = $resultado->fetch_assoc()) { ?>
				<option value="<?php echo $row['idFamilia']; ?>"><?php echo $row['nomFam']; ?></option>
				<?php } ?>
			    </select>
				</div>
			</td>
			</tr>


			
				<tr>
				<td>
				<div>Selecciona Producto : 
				</td>
				<td>
				<select name="cbx_municipio" id="cbx_municipio"></select></div>
				</td>
				</tr>
		

			<?php
			$query = "SELECT * FROM cliente ";
			$resultado=$mysqli->query($query);
			?>
			<tr>
				<td>
			<div>Selecciona Cliente : 
				</td>
				<td>
				<select name="Cliente" id="Cliente" required >
				<option value="0">Seleccionar Cliente</option>
				<?php while($row = $resultado->fetch_assoc()) { ?>
				<option value="<?php echo $row['id_clientes']; ?>"><?php echo $row['nombre']; ?></option>
				<?php } ?>
			    </select>
			</div>
			</td>
				</tr>
			


			<tr>
				<td>
			<div>Selecciona Unidad :
			</td>
				<td> 
			<input type="text" name="unidades" required >
			</td>
				</tr>


			</div>
			
			<tr>
				<td>
			<div>Nombre del chofer :
			</td>
				<td> 
			<input type="text" name="chofer" required >
			</td>
				</tr>


			</div>


			<tr>
				<td>
			<div>Selecciona Contenedor :
			</td>
				<td> 
			<input type="text" name="contenedor" required >
			</td>
				</tr>


			</div>
			
			<tr>
				<td>
			<div>Placas :
			</td>
				<td> 
			<input type="text" name="contenedor" required >
			</td>
				</tr>
			
			<tr>
				<td>
			<div>Selecciona Manifiesto :
			</td>
				<td> 
			<input type="text" name="Manifiesto" required >
			</td>
				</tr>


			</div>
			
			<tr>
				<td>			
			<div>Selecciona Gross :
			</td>
				<td> 
			<input type="number" step="any" name="gross" required >
			</td>
				</tr>


			</div>
			
			<tr>
				<td>
			<div>Selecciona Tare :
			</td>
				<td> 
			<input type="number" step="any" name="Tare" required >
			</td>
				</tr>

			</div>
			
			<tr>
				<td>
			<div>Selecciona Fecha entrada : 
				</td>
				<td>
			<input type="date" name="Fechae" required >
			</td>
				</tr>

			</div>
			
			<tr>
				<td>
			<div>Selecciona Fecha Salida :
			</td>
				<td> 
			<input type="date" name="Fechas" required >
			</td>
				</tr>

			</div>
			
			<tr>
				<td>
			<div>Selecciona Metodo de Pago :
			</td>
				<td> 
			<select name="metodo">
				<option value="CONTADO">CONTADO</option>
				<option value="TARJETA CREDITO">TARJETA CREDITO</option>
				<option value="TARJETA DEBITO">TARJETA DEBITO</option>
				<option value="CHEQUE">CHEQUE</option>
				<option value="CREDITO 8">CREDITO 8</option>
				<option value="CREDITO 15">CREDITO 15</option>
				<option value="CREDITO 30">CREDITO 30</option>
			</select>
			</td>
				</tr>

			</div>

			<tr>
				<td>
			<div>Calcular IVA :
			</td>
				<td> 
			<input type="checkbox" name="iva">
			</td>
				</tr>

			</div>
			<tr>
				<td>
			<div>Merma :<i> Dejar en blanco si no hay merma</i>
			</td>
				<td> 
			<input type="double" name="merma" placeholder="Capturar porcentaje" >%
			</td>
				</tr>

			</div>

			<tr>
				<td>
			<div>Descuento :<i> Dejar en blanco si no hay descuento</i>
			</td>
				<td> 
			<input type="double" name="descuento" placeholder="Capturar total con descuento"  >
			</td>
				</tr>

			</div>






			<tr>
				<td>
			<input type="submit" id="enviar" name="enviar" value="Guardar" />
			</td>
				</tr>
		</form>







</table>




</div>










               
                               
              </div>
            </div>
            
          </div>
        </div>
      </div>
      
      

</div>

    

        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
            </div>
            <div class="modal-footer">
              <a href="sign-in.html" class="btn btn-primary">Yes</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
          </div>
        </div>
      </div>
      <footer class="templatemo-footer">
        <div class="templatemo-copyright">
          <p>Copyright &copy; 2018 Saxum Technologies</p>
        </div>
      </footer>
    </div>



    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
   <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
     <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );

</script>

   <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/Chart.min.js"></script>
    <script src="../js/templatemo_script.js"></script>
    
</body>
</html>


