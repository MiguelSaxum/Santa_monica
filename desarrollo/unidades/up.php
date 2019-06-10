
<html>
 <head>
  <title>FORMULARIO</title>
    
    <?php
    include ("../conect.php");
    $id=$_GET['id'];
    $sql = "SELECT * FROM unidades WHERE id_unidades=$id";
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
       
       
          
             
           <input type="int" name="id_unidades" value="<?php echo $row['id_unidades'] ?>" hidden> 


           <tr>
          <td>
            Chofer 
          </td>
          <td>
           <input type="text" name="chofer" value="<?php echo $row['chofer'] ?>" required>
         </td>
       </tr>  
        
        <tr>
          <td>
            Unidad 
          </td>
          <td>
           <input type="int" name="unidad" value="<?php echo $row['unidad'] ?>" required>
         </td>
       </tr>


          <tr>
            <td>
            Placa
          </td>
          <td>
           <input type="text" name="placa" value="<?php echo $row['placa'] ?>" required>
         </td>
       </tr>


          <tr>
            <td>
            Marca 
          </td>
          <td>
           <input type="text" name="marca" value="<?php echo $row['marca'] ?>" required>
         </td>
       </tr>


          <tr>
            <td>
            Descripción 
          </td>
          <td>
           <input type="text" name="descripcion" value="<?php echo $row['descripcion'] ?>" required>
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