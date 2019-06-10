
<html>
 <head>
  <title>FORMULARIO</title>
    
    <?php
    include ("../conect.php");
    $id=$_GET['id'];
    $sql = "SELECT * FROM usuarios WHERE idUsuarios=$id";
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
       
       
          
            
      
             <tr>
              <td>
            Nombre de Usuario
          </td>
          <td>
           <input type="text" name="nomUs" value="<?php echo $row['nomUs'] ?>" required>
         </td>
       </tr>


           <tr>
            <td>
            Apellido
          </td>
          <td>
           <input type="text" name="apellidoUs"  value="<?php echo $row['apellidoUs'] ?>" required>
         </td>
       </tr>


          <tr>
            <td>
            Fecha de Ingreso
          </td>
          <td>
           <input type="date" name="fechaIng" value="<?php echo $row['fechaIng'] ?>" required>
         </td>
       </tr>

          <tr>
            <td>
            Fecha de Nacimiento
          </td>
          <td>
           <input type="date" name="fechaNac" value="<?php echo $row['fechaNac'] ?>" required>
         </td>
       </tr>


          <tr>
            <td>
            Email
          </td>
          <td>
           <input type="email" name="email"  value="<?php echo $row['email'] ?>" required>
         </td>
       </tr>


          <tr>
            <td>
            Password
          </td>
          <td>
           <input type="text" name="passUs" value="<?php echo $row['passUs'] ?>" required>
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