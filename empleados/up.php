
<html>
 <head>
  <title>FORMULARIO</title>
    
    <?php
    include ("../conect.php");
    $id=$_GET['id'];
    $sql = "SELECT * FROM empleado WHERE idEmpleado=$id";
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
            <td>
            Numero de Empleado
          </td>
          <td>
           <input type="text" name="numEmpleado" value="<?php echo $row['numEmpleado'] ?>" >
         </td>
       </tr>



          <tr>
            <td>
            Nombre de Empleado
          </td>
          <td>
           <input type="text" name="nomEmpleado" value="<?php echo $row['nomEmpleado'] ?>" required>
         </td>
       </tr>

          <tr>
            <td>
            Apellido Paterno
          </td>
          <td>
           <input type="text" name="apellidoPat" value="<?php echo $row['apellidoPat'] ?>" required>
         </td>
       </tr>

       <tr>
            <td>
            Apellido Materno
          </td>
          <td>
           <input type="text" name="apellidoMat" value="<?php echo $row['apellidoMat'] ?>" required>
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

            $query2 = 'SELECT * FROM departamento';

        $result2 = $conn->query($query2);

        ?>
        <select name="id_departamento" >    
            <?php    
            while ( $row2 = $result2->fetch_array() )    
            {
                ?>
            
                <option value="<?php echo $row2['id_departamento'];?>">
                <?php echo $row2['nomDep']; ?>
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
           <input type="text" name="direccion" value="<?php echo $row['direccion'] ?>">
         </td>
       </tr>

          <tr>
            <td>
            Teléfono
          </td>
          <td>
           <input type="int" name="telefono" value="<?php echo $row['telefono'] ?>">
         </td>
         </tr>

          <tr>
            <td>
            Email
          </td>
          <td>
           <input type="email" name="email" value="<?php echo $row['email'] ?>">
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