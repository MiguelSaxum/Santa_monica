
<html>
 <head>
  <title>FORMULARIO</title>
    
    <?php
    include ("../conect.php");
    $id=$_GET['id'];
    $sql = "SELECT * FROM cliente WHERE id_clientes=$id";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) { 
      if (isset($row['dpto']))
      {
      $dpto=$row['dpto'];
    }?>
    
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Actualizar</h4>
 </head>

 <body>
  
   <form action="update.php" method="post">
    <input type="text" name="idd" value="<?php echo $id ?>" hidden>
     <table border="1" align="center">
       
             
           <input type="int" name="id_clientes" value="<?php echo $row['id_clientes'] ?>" hidden>   
        
        <tr>
          <td>
            Nombre 
          </td>
          <td>
           <input type="text" name="nombre" value="<?php echo $row['nombre'] ?>" required>
         </td>
         </tr>


          <tr>
            <td>
            Dirección
          </td>
          <td>
           <input type="text" name="direccion" value="<?php echo $row['direccion'] ?>" required>
         </td>
       </tr>


          <tr>
            <td>
            Teléfono 
          </td>
          <td>
           <input type="int" name="telefono" value="<?php echo $row['telefono'] ?>" required>
         </td>
       </tr>


          <tr>
            <td>
            Email 
          </td>
          <td>
           <input type="email" name="email" value="<?php echo $row['email'] ?>" >
         </td>
       </tr>


          <tr>
            <td>
            RFC 
          </td>
          <td>
           <input type="text"  name="rfc" value="<?php echo $row['rfc'] ?>" >
         </td>
         </tr>

          <tr>
            <td>
            Plazo de Credito 
          </td>
          <td>
           <input type="int" name="plazoCred" value="<?php echo $row['plazoCred'] ?>" required>
         </td>
       </tr>


          <tr>
            <td>
            Ciudad 
          </td>
          <td>
           <input type="text" name="ciudad" value="<?php echo $row['ciudad'] ?>" required>
         </td>
       </tr>


          <tr>
            <td>
            Estado 
          </td>
          <td>
           <input type="text"  name="estado" value="<?php echo $row['estado'] ?>" required>
         </td></tr>

<tr>
        <td>
      Selecciona Departamento :
      </td>
        <td> 
      <?php
          
          if ($dpto==1)
          { ?>
      <select name="dpto">
        
        <option value="1">Materiales</option>
        <option value="2">Contabilidad</option>
        <option value="3">Productos Quimicos</option>
      </select>
    
    <?php }
    else if ($dpto==2)
    {
      ?>
      <select name="dpto">
        <option value="2">Contabilidad</option>
        <option value="1">Materiales</option>
        
        <option value="3">Productos Quimicos</option>
      </select>
    
    <?php }
    else if ($dpto==3)
    {
      ?>
      <select name="dpto">
        <option value="3">Productos Quimicos</option>
        <option value="1">Materiales</option>
        <option value="2">Contabilidad</option>
        
      </select>
    
    <?php }
  
    else 
    {
      ?>
      <select name="dpto">
        <option></option>
        <option value="1">Materiales</option>
        <option value="2">Contabilidad</option>
        <option value="3">Productos Quimicos</option>
      </select>
    
    <?php } ?>
      </td>
        </tr>
            
         <td></td>
         <td style="text-align: right;"> <input type="submit" value="GUARDAR"> 
         <input type="button" value="CANCELAR" OnClick="location.href='menu.php' "></td>
            
            </table>
<?php  }
} else {
    echo "0 results";
}
?>
   </table>
   </form>
 </body>
</HTML>