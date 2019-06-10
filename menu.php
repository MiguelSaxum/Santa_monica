



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
          <li class="active"><a href="../index.php"><i class="fa fa-home"></i>Panel Principal</a></li>
          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-database"></i> Catalogos <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="../usuarios/menu.php">Usuarios</a></li>
              <li><a href="../cliente/menu.php">Clientes</a></li>
              <li><a href="../proveedor/menu.php">Proveedores</a></li>             
              <li><a href="../familia/menu.php">Familia</a></li>
              <li><a href="../producto/menu.php">Productos</a></li>
              <li><a href="../empleados/menu.php">Empleados</a></li>
              <li><a href="../departamento/menu.php">Departamento</a></li>
              <li><a href="../unidades/menu.php">Unidades</a></li>
            </ul>
          </li>
          
          
          
          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-cog"></i> Bascula <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
            <li><a href="../bascula/datos.php">Compras</a></li>
            <li><a href="../bascula/datosventa.php">Ventas</a></li>
            </ul>
          </li>
           <li><a href="../gastos/menu.php"><i class="fa fa-clipboard"></i>Ordenes de Compra</a></li>
           
          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-cubes"></i> Caja <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
            <li><a href="../caja/menucompra.php">Compras</a></li>
            <li><a href="../caja/menuventa.php">Ventas</a></li>
            </ul>
          </li>
          
          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-book"></i> Reportes <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
            <li><a href="../reportes/menucompra.php">Compras</a></li>
            <li><a href="../reportes/menuventa.php">Ventas</a></li>
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
  <li class="active"><a style="color: #000000" href="menu.php">Ordenes de Compra</a></li>
  

</ul>


<a type="button" class="btn btn-large btn-success" data-toggle="modal" data-target="#ModalAgregar"><i class='fa fa-plus'></i> Generar nueva</a>

<br>

<?php
include("../conect.php");

?>
<table id="example" class="display" style="width:100%" border="1">
<?php
$sql = "SELECT *, rubro.descripcion as rubDesc, unidadMedida.descripcion as um FROM gastos inner join rubro on gastos.idRubro = rubro.idRubro inner join unidadMedida on unidadMedida = idUnidadMedida WHERE status =0";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
  echo "<table>
  <tr>
    
    <th>Tipo de Gasto</th>
    <th>Cantidad</th>
    <th>Unidad de Medida</th>
    <th>Descripcion</th>
    <th>Requiere</th>
    <th>Precio</th>
    <th>IVA</th>
    <th>Total</th>
    
  </tr>
  
  
";
 
    while($row = $result->fetch_assoc()) { ?>
    <?php
    $iva=0;
    $total=($row["precioUnitario"]*$row["cantidad"]);
        if ($row['iva']==1)
        {
          $iva+=($total*0.16);
          $total*=1.16;
        }
        
        echo "<tr>
        
        <td>". $row["rubDesc"]. " </td>
        <td>". $row["cantidad"]." </td>
        <td>". $row["um"]. " </td>
        <td>". $row["concepto"]." </td>
        <td>". $row["requiere"]. " </td>
        <td>$". $row["precioUnitario"]." </td>
        <td>$". $iva. " </td>
        <td>$". $total." </td>
         " ?>
        
        <?php $id=$row["id_gastos"]; ?>
        <td>
        <a <?php echo "href='ticketordencompra.php?id=$id' "?> >
        <button  type="button" class="btn btn-large btn-info" ><i class='fa fa-print'></i> Reimprimir</button> </a>
        </td>
        <td><button <?php echo "href='up.php?id=$id' "?> type="button" class="btn btn-large btn-primary" data-toggle="modal" data-target="#ModalEditar"><i class='fa fa-check'></i> Aprobar</button>
        </td>
        <td>
        <button <?php echo "href='del.php?id=$id' "?> type="button" class="btn btn-large btn-danger" data-toggle="modal" data-target="#ModalELIMINAR"><i class='fa fa-times'></i> Rechazar</button>
        
        
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





