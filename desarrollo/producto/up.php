
<html>
 <head>
  <title>FORMULARIO</title>
    
    <?php
    include ("../conect.php");
    $id=$_GET['id'];
    $sql = "SELECT * FROM producto WHERE id_producto=$id";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) { ?>
    
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Actualizar</h4>
 </head>

 <body>
  
   <form action="update.php" method="post">
    <input type="text" name="id" value="<?php echo $id ?>" hidden>
     <table border="1" align="center">
       <tr>
       
          
            
       


          <tr>
            <td>
            Familia
          </td>
          <td>
            <?php
    include("../conect.php");
    ?>

      <?php

            $query2 = 'SELECT * FROM familia';

        $result2 = $conn->query($query2);

        ?>
        <select name="idFamilia" >    
            <?php    
            while ( $row2 = $result2->fetch_array() )    
            {
                ?>
            
                <option value="<?php echo $row2['idFamilia'];?>">
                <?php echo $row2['nomFam']; ?>
                </option>
                
                <?php
            } 

        ?>        
        </select>
         </td>
       </tr>


          <tr>
            <td>
            Nombre del Producto
          </td>
          <td>
           <input type="text" name="nombre_producto" value="<?php echo $row['nombre_producto'] ?>" required>
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

          <tr>
            <td>
            Precio de Venta
          </td>
          <td>
           <input type="number" step="any" name="precio_venta" value="<?php echo $row['precio_venta'] ?>" required>
         </td>
       </tr>


          <tr>
            <td>
            Precio de Compra
          </td>
          <td>
           <input type="number" step="any" name="precio_compra" value="<?php echo $row['precio_compra'] ?>" required>
         </td>
       </tr>

          <tr>
            <td>
            Unidad de Medida
          </td>
          <td>
           <input type="text" name="unidadMed" value="<?php echo $row['unidadMed'] ?>" required>
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