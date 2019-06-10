
<html>
 <head>
  <title>FORMULARIO</title>
    
    <?php
    include ("../conect.php");
    $id=$_GET['id'];
    $sql = "SELECT * FROM proveedor WHERE id_proveedor=$id";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) { ?>
    
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Actualizar</h4>
 </head>

 <body>
  
   <form action="update.php" method="post">
    <input type="text" name="idd" value="<?php echo $id ?>" hidden>
     <table border="1" align="center">
       
       
          
        
             
           <input type="int" name="id_proveedor" value="<?php echo $row['id_proveedor'] ?>" hidden>   
        
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
           <input type="email" name="email" value="<?php echo $row['email'] ?>" required>
         </td>
       </tr>


          <tr>
            <td>
            RFC 
          </td>
          <td>
           <input type="text"  name="rfc" value="<?php echo $row['rfc'] ?>" required>
         </td>
       </tr>


          <tr>
            <td>
            Contacto 
          </td>
          <td>
           <input type="text" name="contacto" value="<?php echo $row['contacto'] ?>" required>
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
            Estado 
          </td>
          <td>
           <input type="text"  name="estado" value="<?php echo $row['estado'] ?>" required>
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