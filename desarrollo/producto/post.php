<html>
 <head>
  <title>FORMULARIO</title>
    
 </head>

 <body>
            <form action="welcome.php" method="post">
            	<table border="1" align="center">
       

      


          <tr>
            <td>
            Familia
          </td>
          <td>
           <?php
    include("../conect.php");
    ?>

      <?php

            $query = 'SELECT * FROM familia';

        $result = $conn->query($query);

        ?>
        <select name="idFamilia" >    
            <?php    
            while ( $row = $result->fetch_array() )    
            {
                ?>
            
                <option value="<?php echo $row['idFamilia'];?>">
                <?php echo $row['nomFam']; ?>
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
           <input type="text" name="nombre_producto" required>
         </td>
       </tr>


          <tr>
            <td>
            Descripción
          </td>
          <td>
           <input type="text" name="descripcion" required>
         </td>
       </tr>


          <tr>
            <td>
            Precio de Venta
          </td>
          <td>
           <input type="number" step="any" name="precio_venta" required>
         </td>
       </tr>


          <tr>
            <td>
            Precio de Compra
          </td>
          <td>
           <input type="number" step="any" name="precio_compra" required>
         </td>
       </tr>


          <tr>
            <td>
            Unidad de Medida
          </td>
          <td>
           <input type="text" name="unidadMed" required>
         </td>
       </tr>


          
          
         <td></td>
         <td style="text-align: right;"> <input type="submit" value="GUARDAR"> 
         <input type="button" value="CANCELAR" OnClick="location.href='menu.php' "></tr>
            
            </table>
   </form>
 </body>
</HTML>
        


