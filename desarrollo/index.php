<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>OPESA - Admin</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/templatemo_main.css">
  <style type="text/css">
    
    #container {
  min-width: 310px;
  max-width: 800px;
  height: 400px;
  margin: 0 auto
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
          <li class="active"><a href="index.php"><i class="fa fa-home"></i>Panel Principal</a></li>
          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-database"></i> Catalogos <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="usuarios/menu.php">Usuarios</a></li>
              <li><a href="cliente/menu.php">Clientes</a></li>
              <li><a href="proveedor/menu.php">Proveedores</a></li>             
              <li><a href="familia/menu.php">Familia</a></li>
              <li><a href="producto/menu.php">Productos</a></li>
              
              <li><a href="departamento/menu.php">Departamento</a></li>
              <li><a href="rubro/menu.php">Tipos de Gasto</a></li>
            </ul>
          </li>
          
          
          
          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-cog"></i> Bascula <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
            <li><a href="bascula/datos.php">Compras</a></li>
            <li><a href="bascula/datosventa.php">Ventas</a></li>
            </ul>
          </li>
           <li><a href="gastos/menu.php"><i class="fa fa-clipboard"></i>Ordenes de Compra</a></li>
           <li><a href="ingresos/menu.php"><i class="fa fa-clipboard"></i>Ingresos</a></li>
          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-cubes"></i> Caja <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
            <li><a href="caja/menucompra.php">Compras</a></li>
            <li><a href="caja/menuventa.php">Ventas</a></li>
            <li><a href="caja/menufactura.php">Facturas</a></li>
            <li><a href="caja/menuocompra.php">Ordenes de Compra</a></li>
            <li><a href="caja/menuoventa.php">Ordenes de Ingreso</a></li>
            </ul>
          </li>
          
          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-book"></i> Reportes <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
            <li><a href="reportes/menucompra.php">Compras</a></li>
            <li><a href="reportes/menuventa.php">Ventas</a></li>
            <li><a href="reportes/menuocompra.php">Ordenes de Compra</a></li>
            <li><a href="reportes/menuoventa.php">Ordenes de Ingreso</a></li>
            </ul>
          </li>
          
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Cerrar Sesión</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">

          <p style="text-align: center;"><img src="opesa.jpg"><br></p>
          
















<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<div id="container"></div>























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
<?php include("conect.php");
?>
<?php

$ene="0";
$feb="0";
$marz="0";
$abril="0";
$mayo="0";
$jun="0";
$jul="0";
$ago="0";
$sep="0";
$oct="0";
$nov="0";
$dic="0";

$ene2="0";
$feb2="0";
$marz2="0";
$abril2="0";
$mayo2="0";
$jun2="0";
$jul2="0";
$ago2="0";
$sep2="0";
$oct2="0";
$nov2="0";
$dic2="0";




$sql = "SELECT * FROM listaventa WHERE fechaSalida between '2018-01-01' and '2018-01-31'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { ?>
                    <?php
                    if ($row['iva']==1)
                    {
                    $ene += ($row["totalCobrar"]*1.16);
                    
                    }
                    else
                    {
                     $ene += $row["totalCobrar"]; 
                    }
                    }
                  }
                  $sql = "SELECT * FROM listaventa WHERE fechaSalida between '2018-02-01' and '2018-02-31'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { ?>
                    <?php
                    if ($row['iva']==1)
                    {
                    $feb += ($row["totalCobrar"]*1.16);
                    
                    }
                    else
                    {
                     $feb += $row["totalCobrar"]; 
                    }
                    }
                  }
                  $sql = "SELECT * FROM listaventa WHERE fechaSalida between '2018-03-01' and '2018-03-31'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { ?>
                    <?php
                    if ($row['iva']==1)
                    {
                    $marz += ($row["totalCobrar"]*1.16);
                    
                    }
                    else
                    {
                     $marz += $row["totalCobrar"]; 
                    }
                    }
                  }
                  $sql = "SELECT * FROM listaventa WHERE fechaSalida between '2018-04-01' and '2018-04-31'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { ?>
                    <?php
                    if ($row['iva']==1)
                    {
                    $abril += ($row["totalCobrar"]*1.16);
                    
                    }
                    else
                    {
                     $abril += $row["totalCobrar"]; 
                    }
                    }
                  }
                  $sql = "SELECT * FROM listaventa WHERE fechaSalida between '2018-05-01' and '2018-05-31'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { ?>
                    <?php
                    if ($row['iva']==1)
                    {
                    $mayo += ($row["totalCobrar"]*1.16);
                    
                    }
                    else
                    {
                     $mayo += $row["totalCobrar"]; 
                    }
                    }
                  }
                  $sql = "SELECT * FROM listaventa WHERE fechaSalida between '2018-06-01' and '2018-06-31'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { ?>
                    <?php
                    if ($row['iva']==1)
                    {
                    $jun += ($row["totalCobrar"]*1.16);
                    
                    }
                    else
                    {
                     $jun += $row["totalCobrar"]; 
                    }
                    }
                  }
                  $sql = "SELECT * FROM listaventa WHERE fechaSalida between '2018-07-01' and '2018-07-31'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { ?>
                    <?php
                    if ($row['iva']==1)
                    {
                    $jul += ($row["totalCobrar"]*1.16);
                    
                    }
                    else
                    {
                     $jul += $row["totalCobrar"]; 
                    }
                    }
                  }
                  $sql = "SELECT * FROM listaventa WHERE fechaSalida between '2018-08-01' and '2018-08-31'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { ?>
                    <?php
                    if ($row['iva']==1)
                    {
                    $ago += ($row["totalCobrar"]*1.16);
                    
                    }
                    else
                    {
                     $ago += $row["totalCobrar"]; 
                    }
                    }
                  }
                  $sql = "SELECT * FROM listaventa WHERE fechaSalida between '2018-09-01' and '2018-09-31'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { ?>
                    <?php
                    if ($row['iva']==1)
                    {
                    $sep += ($row["totalCobrar"]*1.16);
                    
                    }
                    else
                    {
                     $sep += $row["totalCobrar"]; 
                    }
                    }
                  }
                  $sql = "SELECT * FROM listaventa WHERE fechaSalida between '2018-10-01' and '2018-10-31'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { ?>
                    <?php
                    if ($row['iva']==1)
                    {
                    $oct += ($row["totalCobrar"]*1.16);
                    
                    }
                    else
                    {
                     $oct += $row["totalCobrar"]; 
                    }
                    }
                  }
                  $sql = "SELECT * FROM listaventa WHERE fechaSalida between '2018-11-01' and '2018-11-31'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { ?>
                    <?php
                    if ($row['iva']==1)
                    {
                    $nov += ($row["totalCobrar"]*1.16);
                    
                    }
                    else
                    {
                     $nov += $row["totalCobrar"]; 
                    }
                    }
                  }
                  $sql = "SELECT * FROM listaventa WHERE fechaSalida between '2018-12-01' and '2018-12-31'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { ?>
                    <?php
                    if ($row['iva']==1)
                    {
                    $dic += ($row["totalCobrar"]*1.16);
                    
                    }
                    else
                    {
                     $dic += $row["totalCobrar"]; 
                    }
                    }
                  }


$sql = "SELECT * FROM listacompra WHERE fechaSalida between '2018-01-01' and '2018-01-31'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { ?>
                    <?php
                    if ($row['iva']==1)
                    {
                    $ene2 += ($row["totalPagar"]*1.16);
                    
                    }
                    else
                    {
                     $ene2 += $row["totalPagar"]; 
                    }
                    }
                  }
                  $sql = "SELECT * FROM listacompra WHERE fechaSalida between '2018-02-01' and '2018-02-31'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { ?>
                    <?php
                    if ($row['iva']==1)
                    {
                    $feb2 += ($row["totalPagar"]*1.16);
                    
                    }
                    else
                    {
                     $feb2 += $row["totalPagar"]; 
                    }
                    }
                  }
                  $sql = "SELECT * FROM listacompra WHERE fechaSalida between '2018-03-01' and '2018-03-31'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { ?>
                    <?php
                    if ($row['iva']==1)
                    {
                    $marz2 += ($row["totalPagar"]*1.16);
                    
                    }
                    else
                    {
                     $marz2 += $row["totalPagar"]; 
                    }
                    }
                  }
                  $sql = "SELECT * FROM listacompra WHERE fechaSalida between '2018-04-01' and '2018-04-31'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { ?>
                    <?php
                    if ($row['iva']==1)
                    {
                    $abril2 += ($row["totalPagar"]*1.16);
                    
                    }
                    else
                    {
                     $abril2 += $row["totalPagar"]; 
                    }
                    }
                  }
                  $sql = "SELECT * FROM listacompra WHERE fechaSalida between '2018-05-01' and '2018-05-31'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { ?>
                    <?php
                    if ($row['iva']==1)
                    {
                    $mayo2 += ($row["totalPagar"]*1.16);
                    
                    }
                    else
                    {
                     $mayo2 += $row["totalPagar"]; 
                    }
                    }
                  }
                  $sql = "SELECT * FROM listacompra WHERE fechaSalida between '2018-06-01' and '2018-06-31'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { ?>
                    <?php
                    if ($row['iva']==1)
                    {
                    $jun2 += ($row["totalPagar"]*1.16);
                    
                    }
                    else
                    {
                     $jun2 += $row["totalPagar"]; 
                    }
                    }
                  }
                  $sql = "SELECT * FROM listacompra WHERE fechaSalida between '2018-07-01' and '2018-07-31'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { ?>
                    <?php
                    if ($row['iva']==1)
                    {
                    $jul2 += ($row["totalPagar"]*1.16);
                    
                    }
                    else
                    {
                     $jul2 += $row["totalPagar"]; 
                    }
                    }
                  }
                  $sql = "SELECT * FROM listacompra WHERE fechaSalida between '2018-08-01' and '2018-08-31'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { ?>
                    <?php
                    if ($row['iva']==1)
                    {
                    $ago2 += ($row["totalPagar"]*1.16);
                    
                    }
                    else
                    {
                     $ago2 += $row["totalPagar"]; 
                    }
                    }
                  }
                  $sql = "SELECT * FROM listacompra WHERE fechaSalida between '2018-09-01' and '2018-09-31'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { ?>
                    <?php
                    if ($row['iva']==1)
                    {
                    $sep2 += ($row["totalPagar"]*1.16);
                    
                    }
                    else
                    {
                     $sep2 += $row["totalPagar"]; 
                    }
                    }
                  }
                  $sql = "SELECT * FROM listacompra WHERE fechaSalida between '2018-10-01' and '2018-10-31'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { ?>
                    <?php
                    if ($row['iva']==1)
                    {
                    $oct2 += ($row["totalPagar"]*1.16);
                    
                    }
                    else
                    {
                     $oct2 += $row["totalPagar"]; 
                    }
                    }
                  }
                  $sql = "SELECT * FROM listacompra WHERE fechaSalida between '2018-11-01' and '2018-11-31'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { ?>
                    <?php
                    if ($row['iva']==1)
                    {
                    $nov2 += ($row["totalPagar"]*1.16);
                    
                    }
                    else
                    {
                     $nov2 += $row["totalPagar"]; 
                    }
                    }
                  }
                  $sql = "SELECT * FROM listacompra WHERE fechaSalida between '2018-12-01' and '2018-12-31'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { ?>
                    <?php
                    if ($row['iva']==1)
                    {
                    $dic2 += ($row["totalPagar"]*1.16);
                    
                    }
                    else
                    {
                     $dic2 += $row["totalPagar"]; 
                    }
                    }
                  }







$conn->close();
?>
   <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/templatemo_script.js"></script>
    <script type="text/javascript">
      var enero = <?php echo $ene; ?>,febrero = <?php echo $feb; ?>,marzo = <?php echo $marz; ?>,abril = <?php echo $abril; ?>,mayo = <?php echo $mayo; ?>,junio = <?php echo $jun; ?>,julio = <?php echo $jul; ?>,agosto = <?php echo $ago; ?>,septiembre = <?php echo $sep; ?>,octubre = <?php echo $oct; ?>,noviembre = <?php echo $nov; ?>,diciembre = <?php echo $dic; ?>,enero2 = <?php echo $ene2; ?>,febrero2 = <?php echo $feb2; ?>,marzo2 = <?php echo $marz2; ?>,abril2 = <?php echo $abril2; ?>,mayo2 = <?php echo $mayo2; ?>,junio2 = <?php echo $jun2; ?>,julio2 = <?php echo $jul2; ?>,agosto2 = <?php echo $ago2; ?>,septiembre2 = <?php echo $sep2; ?>,octubre2 = <?php echo $oct2; ?>,noviembre2 = <?php echo $nov2; ?>,diciembre2 = <?php echo $dic2; ?>;

Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Ventas vs Compras'
    },
    subtitle: {
        text: ''
    },
   xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: ''
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
            name: 'Venta',
            data: [enero, febrero, marzo, abril, mayo, junio, julio, agosto, septiembre, octubre,noviembre,diciembre]
        }, {
            name: 'Compra',
            data: [enero2, febrero2, marzo2, abril2, mayo2, junio2, julio2, agosto2, septiembre2, octubre2,noviembre2,diciembre2]
        }]
});
    </script>
</body>
</html>