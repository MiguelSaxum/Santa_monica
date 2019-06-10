<?php include("../session.php");?>



<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>SANTA MÓNICA- Admin</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="../css/templatemo_main.css">
  <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
   
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/Chart.min.js"></script>
    <script src="../js/templatemo_script.js"></script>
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
        <div class="logo"><h1>SANTA MÓNICA- Admin </h1></div>
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
          
          <?php include("../menu_seg.php");?>
          
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Cerrar Sesión</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">

          <p style="text-align: center;"><img src="../opesa.jpg"><br></p>
          
<div class="templatemo-charts">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                








<ul class="nav nav-tabs">
  <li class="active"><a style="color: #000000" href="menu.php">Ordenes de Compra</a></li>
  

</ul>




<br>

<?php
include("../conect.php");

?>
<table id="example" class="display" style="width:100%">
<?php
$sql = "SELECT * , 
SUM(conceptosgastos.cantidad*conceptosgastos.precio) AS stotal, 
SUM(IF(conceptosgastos.iva>0,((conceptosgastos.cantidad*conceptosgastos.precio)*0.16), 0)) as tiva, 
(SUM(conceptosgastos.cantidad*conceptosgastos.precio)+SUM(IF(conceptosgastos.iva>0,((conceptosgastos.cantidad*conceptosgastos.precio)*0.16), 0)))as gtotal,
SUM(cantidad)as tcant,
rubro.descripcion as rubDesc, 
unidadmedida.descripcion as um 
FROM gastos inner join conceptosgastos on id_gastos=idGasto 
inner join rubro on conceptosgastos.idRubro = rubro.idRubro 
inner join unidadmedida on unidadMedida = idUnidadMedida 
inner join departamento on departamento_id_departamento = id_departamento 
WHERE status =1
GROUP by id_gastos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
  echo "<thead>
  <tr>
    <th>Numero de Boleta</th>
    <th>Tipo de Gasto</th>
    <th>Cantidad</th>
    <th>Fecha</th>
    <th>Unidad de Medida</th>
    <th>Descripcion</th>
    <th>Requiere</th>
    <th>Precio</th>
    <th>IVA</th>
    <th>Total</th>
    <th></th>
    
  </tr>
  </thead>
  <tbody>
";
 
    while($row = $result->fetch_assoc()) { ?>
    <?php
    
        
        echo "<tr>
        <td>". $row["id_gastos"]. " </td>
        <td>". $row["rubDesc"]. " </td>
        <td>". $row["cantidad"]." </td>
        <td>". $row["fecha"]." </td>
        <td>". $row["um"]. " </td>
        <td>". $row["concepto"]." </td>
        <td>". $row["requiere"]. " </td>
        <td>$". $row["precio"]." </td>
        <td>$". $row["tiva"]. " </td>
        <td>$". $row["gtotal"]." </td>
         " ?>
        
        <?php $id=$row["id_gastos"]; ?>
        <td><button <?php echo "href='upocompra.php?id=$id' "?> type="button" class="btn btn-large btn-primary" data-toggle="modal" data-target="#ModalEditar"><i class='fa fa-check'></i> Aprobar</button>
        </td>
        </tr>
  <?php  }
} else {
    echo "0 results";
}
echo "</tbody>
</table>";
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
              <a href="../Login/pagina.php" class="btn btn-primary">Yes</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
          </div>
        </div>
      </div>
      
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
            
        ]
    } );
} );
</script>
</div>
</div>
</div>
</div>
</div>
</div>

</body>


<footer class="templatemo-footer">
        <div class="templatemo-copyright">
          <p>Copyright &copy; 2018 Saxum Technologies</p>
        </div>
      </footer>
      </html>
</body>
</html>
