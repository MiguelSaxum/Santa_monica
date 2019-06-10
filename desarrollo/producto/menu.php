<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>OPESA - Admin</title>
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
                








<div id="ModalAgregar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ingrese los Datos</h4>
      </div>
      <div class="modal-body">
        <?php include("post.php");?>
      </div>
      
    </div>

  </div>
</div>
<ul class="nav nav-tabs">
  <li class="active"><a style="color: #000000" href="menu.php">Producto</a></li>
  

</ul>


<a type="button" class="btn btn-large btn-success" data-toggle="modal" data-target="#ModalAgregar"><i class='glyphicon glyphicon-plus'></i> AGREGAR PRODUCTO</a>

<br>

<?php
include("../conect.php");

?>

<?php
$sql = "SELECT * FROM producto inner join familia on producto.familia=familia.idFamilia order by familia asc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
  echo "<table>
  <tr>
    
    <th>Familia</th>
    <th>Nombre del Producto</th>
    <th>Descripción</th>
    <th>Precio de Venta</th>
    <th>Precio de Compra</th>
    <th>Unidad de Medida</th>
  </tr>
  
  
";
 
    while($row = $result->fetch_assoc()) { ?>
    <?php

        echo "<tr>
        
        <td> ". $row["nomFam"]. " </td>
        <td>". $row["nombre_producto"]." </td>
        <td>".$row["descripcion"]." </td>
        <td>".$row["precio_venta"]. " </td>
        <td>".$row["precio_compra"]." </td>
        <td>".$row["unidadMed"]."</td> " ?>
        
        <?php $id=$row["id_producto"]; ?>
        <td><button <?php echo "href='up.php?id=$id' "?> type="button" class="btn btn-large btn-primary" data-toggle="modal" data-target="#ModalEditar"><i class='fa fa-pencil'></i>ACTUALIZAR</button>
        </td>
        <td>
        <button <?php echo "href='del.php?id=$id' "?> type="button" class="btn btn-large btn-danger" data-toggle="modal" data-target="#ModalELIMINAR"><i class='fa fa-times'></i>ELIMINAR</button>
        
        
        </td></tr>
  <?php  }
} else {
    echo "0 results";
}
echo "</table>";
$conn->close();
?> 




<!-- ModalEditar -->
<div id="ModalEditar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
         <?php include("up.php"); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- ModalELIMINAR -->
<div id="ModalELIMINAR" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
         <?php include("del.php"); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
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



















