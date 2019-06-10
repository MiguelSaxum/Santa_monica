<html>
 <head>
  <title>FORMULARIO</title>
    
 </head>

 <body>
            <form action="welcome.php" method="post">
            	<table border="1" align="center">
       
       
          <tr>
            <td>
            DESCRIPCIÓN
          </td>
          <td>
           <input type="text" name="descripcion" required>
         </td>
       </tr>


         <tr>
            <td>
            DEPARTAMENTO
          </td>
          <td>
           <?php
    include("../conect.php");
    ?>

      <?php

            $query = 'SELECT * FROM departamento';

        $result = $conn->query($query);

        ?>
        <select name="id_departamento" >    
            <?php    
            while ( $row = $result->fetch_array() )    
            {
                ?>
            
                <option value="<?php echo $row['id_departamento'];?>">
                <?php echo $row['nomDep']; ?>
                </option>
                
                <?php
            } 

        ?>        
        </select>
         </td>
       </tr>



         
          
          	<td></td>
         <td style="text-align: right;"> <input type="submit" value="GUARDAR"> 
         <input type="button" value="CANCELAR" OnClick="location.href='menu.php' "></tr>
            
            </table>
   </form>
 </body>
</HTML>
        


