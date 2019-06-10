<!DOCTYPE html>
 <head>
  <script type="text/javascript">
var nextinput = 1;
function AgregarCampos(){
nextinput++;
if (nextinput >= 11)
{finish();}
campo = '<div class = "form-group"><label>Tipos de Gasto:</label></div><select  id = "municipio'+nextinput+'" name = "municipio'+nextinput+'"  class = "form-control" disabled = "disabled" required = "required"><option value = "">Selecciona un Tipo de Gasto</option></select><br></div>Cantidad: <input type="int" name="cantidad'+nextinput+'" size="1" id="cantidad" required>Precio Unitario: <input type="double" name="precioUnitario'+nextinput+'" size="3" required><b>IVA </b><input type="checkbox" name="iva'+nextinput+'"><br><br>';
$('select#options').clone().attr('id', 'municipio' + nextinput).attr('name', 'municipio' + nextinput).appendTo('#campos');
$("#campos").append(campo);
}
</script>
  <title>FORMULARIO</title>
    
 </head>
<?php
    include("../conect.php");
    ?>
 <body>
            <form class="form-inline" action="welcome.php" method="post">
            	<table border="1" align="center">
       
       
          <tr>
            <td>
           <div class  =  "form-group">
              <label>Departamento:</label>
            </td>
            <td colspan="2">
              <select id = "id_deparatamento" class = "form-control" name = "id_deparatamento" required = "required">
                <option value = "">Selecciona un departamento</option>
                <?php
                  $query = 'SELECT * FROM departamento';

                    $result = $conn->query($query);
                   while ( $row = $result->fetch_array() )    
            {
                ?>
                  <option value ="<?php echo $row['id_departamento']?>"><?php echo ($row['nomDep'])?></option>
                <?php
                    }
                  $conn->close(); 
                ?>
              </select>
              </td>
        </div>  
         
       </tr>


          <tr>
            <td>
            Persona que Solicita
             </td>
          <td colspan="2">
           <input type="text" name="solicita" required>
         </td>
       </tr>

        <tr>
            <td>
            Lo Requiere
          </td>
          <td colspan="2">
           <input type="text" name="requiere" required>
         </td>
       </tr>

        <tr>
            <td colspan="3">
          <div class = "form-group">
              <label>Tipos de Gasto:</label>
            </div>
          
        
        
              <select  id = "municipio1" name = "municipio1"  class = "form-control" disabled = "disabled" required = "required">
                <option value = "">Selecciona un Tipo de Gasto</option>
              </select><br>
            </div>
         
            Cantidad: <input type="int" name="cantidad1" size="1" id="cantidad" required>
            Precio Unitario: <input type="double" name="precioUnitario1" size="3" required>
           <b>IVA </b><input type="checkbox" name="iva1"><br><br>
           
         
         <div id="campos">
      </div>
      <a href="#" onclick="AgregarCampos();"></a>
       </tr>
       
       
        
        <tr>
            <td>
           Unidad de Medida
          </td>
          <td colspan="2">
       <?php
    include("../conect.php");
    ?>    

      <?php

            $query = 'SELECT * FROM unidadmedida';

        $result = $conn->query($query);

        ?>
        <select name="unidadMedida" >    
            <?php    
            while ( $row = $result->fetch_array() )    
            {
                ?>
            
                <option value="<?php echo $row['idUnidadMedida'];?>">
                <?php echo $row['descripcion']; ?>
                </option>
                
                <?php
            } 

        ?>        
        </select>
         </td>
       </tr>
       <tr>
            <td>
           Proveedor
          </td>
          <td colspan="2">
       <?php
    include("../conect.php");
    ?>    

      <?php

            $query = 'SELECT * FROM `proveedor` WHERE `dpto` = 2';

        $result = $conn->query($query);

        ?>
        <select name="proveedor" style="width: 80%">    
            <?php    
            while ( $row = $result->fetch_array() )    
            {
                ?>
            
                <option value="<?php echo $row['id_proveedor'];?>">
                <?php echo $row['nombre']; ?>
                </option>
                
                <?php
            } 

        ?>        
        </select>
         </td>
       </tr>
        <tr>
            <td>
            Descripcion
          </td>
          <td colspan="2">
           <input type="text" name="concepto" required>
         </td>
       </tr>

        




         
          
          	<td></td>
         <td colspan="2" style="text-align: right;"> <input type="submit" value="GUARDAR"> 
         <input type="button" value="CANCELAR" OnClick="location.href='menu.php' "></tr>
            
            </table>
   </form>
 </body>
 <script src = "../js/jquery-3.1.1.js"></script>
<script type = "text/javascript">
  $(document).ready(function(){
    $('#id_deparatamento').on('change', function(){
        if($('#id_deparatamento').val() == ""){
          $('#municipio1').empty();
          $('<option value = "">Selecciona un Tipo de Gasto</option>').appendTo('#municipio1');
          $('#municipio1').attr('disabled', 'disabled');
        }else{
          $('#municipio1').removeAttr('disabled', 'disabled');
          $('#municipio1').load('municipio_get.php?id_deparatamento=' + $('#id_deparatamento').val());
        }
    });
  });
</script>
<script type = "text/javascript">
  $(document).ready(function(){
    $('#id_deparatamento').on('change', function(){
        if($('#id_deparatamento').val() == ""){
          $('#municipio2').empty();
          $('<option value = "">Selecciona un Tipo de Gasto</option>').appendTo('#municipio2');
          $('#municipio2').attr('disabled', 'disabled');
        }else{
          $('#municipio2').removeAttr('disabled', 'disabled');
          $('#municipio2').load('municipio_get.php?id_deparatamento=' + $('#id_deparatamento').val());
        }
    });
  });
</script>
<script type = "text/javascript">
  $(document).ready(function(){
    $('#id_deparatamento').on('change', function(){
        if($('#id_deparatamento').val() == ""){
          $('#municipio3').empty();
          $('<option value = "">Selecciona un Tipo de Gasto</option>').appendTo('#municipio3');
          $('#municipio3').attr('disabled', 'disabled');
        }else{
          $('#municipio3').removeAttr('disabled', 'disabled');
          $('#municipio3').load('municipio_get.php?id_deparatamento=' + $('#id_deparatamento').val());
        }
    });
  });
</script>
<script type = "text/javascript">
  $(document).ready(function(){
    $('#id_deparatamento').on('change', function(){
        if($('#id_deparatamento').val() == ""){
          $('#municipio4').empty();
          $('<option value = "">Selecciona un Tipo de Gasto</option>').appendTo('#municipio4');
          $('#municipio4').attr('disabled', 'disabled');
        }else{
          $('#municipio4').removeAttr('disabled', 'disabled');
          $('#municipio4').load('municipio_get.php?id_deparatamento=' + $('#id_deparatamento').val());
        }
    });
  });
</script>
<script type = "text/javascript">
  $(document).ready(function(){
    $('#id_deparatamento').on('change', function(){
        if($('#id_deparatamento').val() == ""){
          $('#municipio5').empty();
          $('<option value = "">Selecciona un Tipo de Gasto</option>').appendTo('#municipio5');
          $('#municipio5').attr('disabled', 'disabled');
        }else{
          $('#municipio5').removeAttr('disabled', 'disabled');
          $('#municipio5').load('municipio_get.php?id_deparatamento=' + $('#id_deparatamento').val());
        }
    });
  });
</script>
<script type = "text/javascript">
  $(document).ready(function(){
    $('#id_deparatamento').on('change', function(){
        if($('#id_deparatamento').val() == ""){
          $('#municipio6').empty();
          $('<option value = "">Selecciona un Tipo de Gasto</option>').appendTo('#municipio6');
          $('#municipio6').attr('disabled', 'disabled');
        }else{
          $('#municipio6').removeAttr('disabled', 'disabled');
          $('#municipio6').load('municipio_get.php?id_deparatamento=' + $('#id_deparatamento').val());
        }
    });
  });
</script>
<script type = "text/javascript">
  $(document).ready(function(){
    $('#id_deparatamento').on('change', function(){
        if($('#id_deparatamento').val() == ""){
          $('#municipio7').empty();
          $('<option value = "">Selecciona un Tipo de Gasto</option>').appendTo('#municipio7');
          $('#municipio7').attr('disabled', 'disabled');
        }else{
          $('#municipio7').removeAttr('disabled', 'disabled');
          $('#municipio7').load('municipio_get.php?id_deparatamento=' + $('#id_deparatamento').val());
        }
    });
  });
</script>
<script type = "text/javascript">
  $(document).ready(function(){
    $('#id_deparatamento').on('change', function(){
        if($('#id_deparatamento').val() == ""){
          $('#municipio8').empty();
          $('<option value = "">Selecciona un Tipo de Gasto</option>').appendTo('#municipio8');
          $('#municipio8').attr('disabled', 'disabled');
        }else{
          $('#municipio8').removeAttr('disabled', 'disabled');
          $('#municipio8').load('municipio_get.php?id_deparatamento=' + $('#id_deparatamento').val());
        }
    });
  });
</script>
<script type = "text/javascript">
  $(document).ready(function(){
    $('#id_deparatamento').on('change', function(){
        if($('#id_deparatamento').val() == ""){
          $('#municipio9').empty();
          $('<option value = "">Selecciona un Tipo de Gasto</option>').appendTo('#municipio9');
          $('#municipio9').attr('disabled', 'disabled');
        }else{
          $('#municipio9').removeAttr('disabled', 'disabled');
          $('#municipio9').load('municipio_get.php?id_deparatamento=' + $('#id_deparatamento').val());
        }
    });
  });
</script>
<script type = "text/javascript">
  $(document).ready(function(){
    $('#id_deparatamento').on('change', function(){
        if($('#id_deparatamento').val() == ""){
          $('#municipio10').empty();
          $('<option value = "">Selecciona un Tipo de Gasto</option>').appendTo('#municipio10');
          $('#municipio10').attr('disabled', 'disabled');
        }else{
          $('#municipio10').removeAttr('disabled', 'disabled');
          $('#municipio10').load('municipio_get.php?id_deparatamento=' + $('#id_deparatamento').val());
        }
    });
  });
</script>

</HTML>
        


