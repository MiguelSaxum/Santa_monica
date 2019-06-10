<html>
 <head>
  <title>FORMULARIO</title>
    
 </head>

 <body>
            <form action="welcome.php" method="post">
              <table border="1" align="center">
       
         
          <tr>
            <td>
            Nombre de Usuario
          </td>
          <td>
           <input type="text" name="nomUs" required>
         </td>
       </tr>

          <tr>
            <td>
            Apellido
          </td>
          <td>
           <input type="text" name="apellidoUs" required>
         </td>
       </tr>

           <tr>
            <td>
            Nivel de Seguridad
            </td>
            <td>
             <?php
    include("../conect.php");
    ?>

      <?php

            $query = 'SELECT * FROM nivelseguridad';

        $result = $conn->query($query);

        ?>
        <select name="idnivelSeguridad" >    
            <?php    
            while ( $row = $result->fetch_array() )    
            {
                ?>
            
                <option value="<?php echo $row['idnivelSeguridad'];?>">
                <?php echo $row['nomNivelSeg']; ?>
                </option>
                
                <?php
            } 

        ?>        
        </select>
      </td>
    </tr>

              <tr>
                <td>
            Fecha de Nacimiento
          </td>
          <td>
           <input type="date" name="fechaNac" required>
         </td>
       </tr>

          <tr>
            <td>
            Fecha de Ingreso
          </td>
          <td>
           <input type="date" name="fechaIng" required>
         </td>
         </tr>

          <tr>
            <td>
            Email
          </td>
          <td>
           <input type="email" name="email" required>
         </td>
       </tr>

          <tr>
            <td>
            Password
          </td>
          <td>
           <input type="text" name="passUs" required>
         </td>
       </tr>


          
            
       

         <td></td>
         <td style="text-align: right;"> <input type="submit" value="GUARDAR"> 
         <input type="button" value="CANCELAR" OnClick="location.href='menu.php' "></tr>
            
            </table>
   </form>
 </body>
</HTML>
        


