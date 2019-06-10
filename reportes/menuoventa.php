<?php include("../session.php");?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
   <title>REPORTES</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">   
  <link href="../jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />   
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
<script type="text/javascript">
    function showContent() {
        element = document.getElementById("content");
        check = document.getElementById("check");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>
</head>
<body>
<div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1>SANTA MÓNICA- <?php echo $_SESSION["usuario"]." ".$_SESSION["apellido"]; ?></h1></div>
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








          
             <?php 
          if ( $n == 4) {
                                 echo "
                            <li class='sub'>
            <a href='javascript:;'>
              <i class='fa fa-tint'></i> Productos Quimicos <div class='pull-right'><span class='caret'></span></div>
            </a>
            <ul class='templatemo-submenu'>
            <li><a href='../bascula/datos.php?id=3'>Compras</a></li>
              <li><a href='../bascula/datosventa.php?id=3'>Ventas</a></li>
              
              <li><a href='../cliente/menu.php?id=3'>Clientes</a></li>
              <li><a href='../proveedor/menu.php?id=3'>Proveedores</a></li>             
              <li><a href='../familia/menu.php?id=3'>Familia</a></li>
              <li><a href='../producto/menu.php?id=3'>Productos</a></li>

            </ul>
          </li>";
                            }
               ?>
          
          
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Cerrar Sesión</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">

          <p style="text-align: center;"><img src="../opesa.jpg"><br></p>
          
<div class="templatemo-charts">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                






        
    






<h2 style="text-align: center;">REPORTES ORDENES DE INGRESOS</h2>

<!--Boton que apunta hacia el modal para abrir el formulario del insert-->


<?php
include("../conect.php");

?>

<table id="example" class="display" style="width:100%">
  <?php
$sql = "SELECT * FROM ingresos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
  echo "<thead>
  <tr>
    <th>Numero de Boleta</th>
    <th>Persona</th>
    <th>Fecha</th>
    <th>Concepto</th>
    <th>Cantidad</th>
    <th></th>
    
  </tr>
  </thead>
  <tbody>
";
 
    while($row = $result->fetch_assoc()) { ?>
    <?php
    
        
        echo "<tr>
        
        <td>". $row["idIngresos"]. " </td>
        <td>". $row["quien"]. " </td>
        <td>". $row["cuando"]. " </td>
        <td>". $row["porque"]." </td>
        <td>". $row["cuanto"]. " </td>
         " ?>
        
        <?php $id=$row["idIngresos"]; ?>
        <td><a <?php echo "href='../ingresos/ticketordeningreso.php?id=$id' "?> ><button type="button" class="btn btn-large btn-primary" data-toggle="modal" data-target="#ModalEditar"><i class='fa fa-print'></i> Orden de Ingreso</button></a>
        </td>
        
        </tr>
  <?php  }
} else {
    echo "0 results";
}
echo "</tbody></table>";
$conn->close();
?> 


</div>
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