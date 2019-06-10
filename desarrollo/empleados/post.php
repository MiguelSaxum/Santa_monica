<html>
 <head>
  <title>FORMULARIO</title>
    
 </head>

 <body>
            <form action="welcome.php" method="post">
            	<table border="1" align="center">
       
          <tr>
            <td>
            Numero de Empleado
          </td>
          <td>
           <input type="text" name="numEmpleado" >
         </td>
       </tr>



          <tr>
            <td>
            Nombre de Empleado
          </td>
          <td>
           <input type="text" name="nomEmpleado" required>
         </td>
       </tr>

          <tr>
            <td>
            Apellido Paterno
          </td>
          <td>
           <input type="text" name="apellidoPat" required>
         </td>
       </tr>

       <tr>
            <td>
            Apellido Materno
          </td>
          <td>
           <input type="text" name="apellidoMat" required>
         </td>
       </tr>

            <tr>
            <td>
           Departamento
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

              <tr>
                <td>
            Dirección
          </td>
          <td>
           <input type="text" name="direccion" >
         </td>
       </tr>

          <tr>
            <td>
            Teléfono
          </td>
          <td>
           <input type="int" name="telefono" >
         </td>
         </tr>

          <tr>
            <td>
            Email
          </td>
          <td>
           <input type="email" name="email" >
         </td>
       </tr>

         


          
          	
       

         <td></td>
         <td style="text-align: right;"> <input type="submit" value="GUARDAR"> 
         <input type="button" value="CANCELAR" OnClick="location.href='menu.php' "></tr>
            
            </table>
   </form>
 </body>
</HTML>
        


